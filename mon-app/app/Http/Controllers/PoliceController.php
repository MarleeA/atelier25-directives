<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PoliceController extends Controller
{ 

    public function create(Request $request){
       return view('trips.create',[
        'name'=>$request->old('name'),
        'age'=>$request->old('age'),
        'country'=>$request->old('country'),
    ]);

    }

    public function store(Request $request){
        $validate= $request->validate([
            'name'=>['required','string','regex:/^[a-zA-Z]+$/'],
            'age'=>'required|numeric',
            'country'=>'required|in:France,Espagne',
        ]);

          $name=$request->input('name');
          $age=$request->input('type');
          $country=$request->input('attaque');
          dd($request); 

          return view('trips.create',['trips'=>['name'=>$name,'age'=>$age,'country'=>$country]]);

    }


}