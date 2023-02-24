<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class myController extends Controller
{
    //home
    public function index()
    {
        $movies = Movie::all();
        //$movies = [];
        return view('home', compact('movies'));
    }
}
