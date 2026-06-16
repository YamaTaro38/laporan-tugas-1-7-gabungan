<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CssController extends Controller
{
    public function layout()
    {
        return view('css.layout');
    }
}