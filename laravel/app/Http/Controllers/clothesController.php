<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clothes;

class clothesController extends Controller
{
    public function clothes()
    {
        $clothes = clothes::all();
        // return view('clothes',['clothes'=>$clothes]);
        return view('clothes',compact('clothes'));
    }
    public function create()
    {
        return view('create');
    }
    public function addclothes(Request $request)
    {
        // dd($request->file());
        $sizePicture = $request->file('picture')->getSize();
        $namePicture = $request->file('picture')->getClientOriginalName();
        // $namePicture = $request->file('picture')->getClientOriginalExtension();
        // $namePicture = $request->file('picture')->getSize();
        $request->file('picture')->storeAs('public/images/',$namePicture);
        $clothes = new clothes();
        $clothes->namePicture = $namePicture;
        $clothes->sizePicture = $sizePicture;
        $clothes->type= $request->input('type');
        $clothes->size = $request->input('size');
        $clothes->color = $request->input('color');
        $clothes->price = $request->input('price');
        $clothes->description = $request->input('description');
        $clothes->save();
        return redirect('/clothes');
    } 
    public function compare()
    {
        $mostExpensive = Clothes::orderBy('price', 'desc')->first();

        return view('compare', ['mostExpensive' => $mostExpensive]);

        // dd(asset('storage/images/' . $mostExpensive->namePicture . '_' . $mostExpensive->nameSize . '.jpg'));
    }
}
