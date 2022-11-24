<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PoliceController extends Controller
{ 

    public function create(){
       return view('trips.create',['trips'=>['name'=>'ALCARAZ','age'=>25,'country'=>'france']]);

    }

    public function store(Request $request){
        $validate= $request->validate([
            'name'=>'required|string',
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