<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Currency;
use App\Models\Image;
use App\Models\Product;

class HomeController extends Controller
{
    public $product;
    const take = 8;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        if (app()->environment('production') && !auth()->check()) {
//            return view('frontend.pages.under_construction');
//        }
        $newArrivals = $this->product->active()->hasProductAttribute()->hasGallery()->onHomePage()->orderBy('created_at', 'desc')->with('gallery.images', 'favorites')->take(self::take)->get();
        $onSaleProducts = $this->product->active()->hasProductAttribute()->hasGallery()->onSaleOnHomePage()->with('gallery.images', 'favorites')->take(self::take)->get();
        $bestSalesProducts = $this->product->whereIn('id', $this->product->active()->hasProductAttribute()->hasGallery()->bestSalesProducts())->with('gallery.images', 'favorites')->get();
        $brands = Brand::active()->where('is_home', true)->has('products', '>', 0)->take(12)->get();
        return view('frontend.home', compact(
            'newArrivals',
            'onSaleProducts',
            'bestSalesProducts',
            'brands'
        ));
    }

    public function changeCurrency()
    {
        $currency = Currency::where('currency_symbol_en', strtoupper(request('currency')))->first();
        session()->put('currency', $currency);
        return redirect()->back();
    }

    public function changeLanguage()
    {
        app()->setLocale(request('locale'));
        session()->put('locale', request('locale'));
        return redirect()->back();
    }

    public function getAboutus(Aboutus $aboutUs)
    {
        $aboutData = $aboutUs->where('id', 1)->first();

        return view('frontend.pages.about', compact('aboutData'));
    }

    public function getContact()
    {
        return view('frontend.pages.contact');
    }

    /**
     * Post Contact Form
     * @param Request $request
     */
    public function postContact(Request $request)
    {
        $email = Contactus::first()->email;

        try {

            Mail::to($email)->cc($request->email)->queue(new SendContactus($request->request->all()));

        } catch (\Exception $e) {

            return redirect()->back()->with('info', $e->getMessage());
        }

        return redirect('home')->with('success', trans('general.mail_sent'));
    }


    public function getFaq()
    {
        $faqs = $this->pagesQuestions->getFaqs();

        return view('frontend.pages.faq', compact('faqs'));
    }

    public function getPrivacy(Privacy $privacy)
    {
        $privacyData = $privacy->where('id', 1)->first();

        return view('frontend.pages.privacy', compact('privacyData'));
    }

    public function getPolicy()
    {
        $QAs = $this->pagesQuestions->getReturnPolicy();

        return view('frontend.pages.policy', compact('QAs'));
    }

    public function getTerms(Terms $terms)
    {
        $termsData = $terms->where('id', 1)->first();

        return view('frontend.pages.terms', compact('termsData'));
    }

}
