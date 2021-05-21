<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class PersonController extends Controller
{
    public function home(){
        return view('home');
    }

    public function store(Request $request){
        Person::create(
            [
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
            ]
            );

        $data = Person::all();

        return redirect('/');
    }

    public function form(){

        $data = Person::all();

        return view('form',['data' => $data]);
    }
}
