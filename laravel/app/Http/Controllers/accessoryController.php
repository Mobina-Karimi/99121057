<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\accessory;

class accessoryController extends Controller
{
    public function accessory()
    {
        $accessory = accessory::all();
        return view('accessory',compact('accessory'));
    }
    public function create4()
    {
        return view('create4');
    }
    public function addaccessory(Request $request)
    {
        $sizePicture = $request->file('picture')->getSize();
        $namePicture = $request->file('picture')->getClientOriginalName();
        $request->file('picture')->storeAs('public/images/',$namePicture);
        $accessory= new accessory();
        $accessory->namePicture = $namePicture;
        $accessory->sizePicture = $sizePicture;
        $accessory->type= $request->input('type');
        $accessory->size = $request->input('size');
        $accessory->color = $request->input('color');
        $accessory->price = $request->input('price');
        $accessory->description = $request->input('description');
        $accessory->save();
        return redirect('/accessory');
    } 
    public function compare()
    {
        $mostExpensive = accessory::orderBy('price', 'desc')->first();

        return view('compare', ['mostExpensive' => $mostExpensive]);
    }

}
