<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JsController extends Controller
{
    public function interaktif()
    {
        return view('js.interaktif');
    }
}