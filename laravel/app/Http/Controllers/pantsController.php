<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pants;

class pantsController extends Controller
{
    public function pants()
    {
        $pants = pants::all();
        return view('pants',compact('pants'));
    }
    public function create2()
    {
        return view('create2');
    }
    public function addpants(Request $request)
    {
        $sizePicture = $request->file('picture')->getSize();
        $namePicture = $request->file('picture')->getClientOriginalName();
        $request->file('picture')->storeAs('public/images/',$namePicture);
        $pants= new pants();
        $pants->namePicture = $namePicture;
        $pants->sizePicture = $sizePicture;
        $pants->type= $request->input('type');
        $pants->size = $request->input('size');
        $pants->color = $request->input('color');
        $pants->price = $request->input('price');
        $pants->description = $request->input('description');
        $pants->save();
        return redirect('/pants');
    } 
    public function compare()
    {
        $mostExpensive = pants::orderBy('price', 'desc')->first();

        return view('compare', ['mostExpensive' => $mostExpensive]);
    }
}
