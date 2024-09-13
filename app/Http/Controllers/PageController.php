<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;
use App\Models\Travel;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function contacts(){
        return view('contacts');
    }

    public function trains(){

        $trains=Train::all();
        return view('trains', compact('trains'));
    }

    public function travels(){
        $travels=Travel::all();
        return view('travels', compact('travels'));
    }
}
