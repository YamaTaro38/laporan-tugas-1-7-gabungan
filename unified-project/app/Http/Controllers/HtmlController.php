<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HtmlController extends Controller
{
    public function formMahasiswa()
    {
        return view('html.form_mahasiswa');
    }

    public function submitFormMahasiswa(Request $request)
    {
        $data = $request->all();
        return view('html.form_mahasiswa_result', compact('data'));
    }
}