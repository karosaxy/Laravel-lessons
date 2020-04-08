<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = \App\Service::all();
        
        return view('service.index', compact('services'));
    }

    public function store()  //to validate a form, create a variable e.g $data and assign it to a request method that is passed to a validate method. inside the validate method pass an argument as an array.
    {
        $data = request()->validate([
          'name' => 'required|min:5 '
        ]);

      \App\Service::create($data);

        return redirect()->back(); 
    }
}