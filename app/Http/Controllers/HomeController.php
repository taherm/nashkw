<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newArrivals = $this->productRepository->model->orderBy('created_at', 'desc')->take(12)->get();

        $onSaleProducts = $this->productRepository->model->onsale()->take(12)->get();

        $bestSalesProducts = $this->productRepository->bestSalesProducts();

        return view('frontend.home', compact(
            'newArrivals',
            'onSaleProducts',
            'bestSalesProducts'
        ));
    }
}
