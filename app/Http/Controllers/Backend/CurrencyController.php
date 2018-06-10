<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Currency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class CurrencyController extends Controller
{

    public function index()
    {
        $elements = Currency::all();
        return view('backend.modules.currency.index', compact('elements'));
    }


    public function create() {
        return view('backend.modules.currency.create');
    }

    public function edit($id)
    {
        $element = Currency::whereId($id)->first();
        return view('backend.modules.currency.edit', compact('element'));
    }

    public function update(Request $request, $id)
    {
        $validate = validator($request->all(), [
            'exchange_rate' => 'required|numeric|min:0.1|max:.9'
        ]);
        if ($validate->failed()) {
            return redirect()->back()->withErrors($validate);
        }

        $element = Currency::whereId($id)->first();
        $element->update(['exchange_rate' => $request->exchange_rate]);
        return redirect()->back()->with('success', 'rate updateded successfully');
    }

    public function updateRates()
    {
        Artisan::call('currency:update');

        return redirect()->route('backend.currency.index')->with('success', 'currencies updated');
    }
}
