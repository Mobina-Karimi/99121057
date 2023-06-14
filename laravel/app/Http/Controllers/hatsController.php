<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hats;

class hatsController extends Controller
{
    public function hats()
    {
        $hats = hats::all();
        return view('hats',compact('hats'));
    }
    public function create3()
    {
        return view('create3');
    }
    public function addhats(Request $request)
    {
        $sizePicture = $request->file('picture')->getSize();
        $namePicture = $request->file('picture')->getClientOriginalName();
        $request->file('picture')->storeAs('public/images/',$namePicture);
        $hats= new hats();
        $hats->namePicture = $namePicture;
        $hats->sizePicture = $sizePicture;
        $hats->type= $request->input('type');
        $hats->size = $request->input('size');
        $hats->color = $request->input('color');
        $hats->price = $request->input('price');
        $hats->description = $request->input('description');
        $hats->save();
        return redirect('/hats');
    } 
    public function compare()
    {
        $mostExpensive = hats::orderBy('price', 'desc')->first();

        return view('compare', ['mostExpensive' => $mostExpensive]);
    }
}
