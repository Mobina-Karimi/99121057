<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\shoes;

class shoesController extends Controller
{
    public function shoes()
    {
        $shoes = shoes::all();
        return view('shoes',compact('shoes'));
    }
    public function create1()
    {
        return view('create1');
    }
    public function addshoes(Request $request)
    {
        $sizePicture = $request->file('picture')->getSize();
        $namePicture = $request->file('picture')->getClientOriginalName();
        $request->file('picture')->storeAs('public/images/',$namePicture);
        $shoes= new shoes();
        $shoes->namePicture = $namePicture;
        $shoes->sizePicture = $sizePicture;
        $shoes->type= $request->input('type');
        $shoes->size = $request->input('size');
        $shoes->color = $request->input('color');
        $shoes->price = $request->input('price');
        $shoes->description = $request->input('description');
        $shoes->save();
        return redirect('/shoes');
    } 
    public function compare()
    {
        $mostExpensive = shoes::orderBy('price', 'desc')->first();

        return view('compare', ['mostExpensive' => $mostExpensive]);
    }
}
