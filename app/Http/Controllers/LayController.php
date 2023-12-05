<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayController extends Controller
{
    public function index()
    {
        return view('lay.index');
    }
}
