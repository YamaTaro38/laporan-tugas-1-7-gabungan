<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function index()
    {
        return view('ajax.index');
    }

    public function shout(Request $request)
    {
        $pesan = $request->input('pesan', '');
        
        if (trim($pesan) === '') {
            return response('⚠️ Silakan masukkan pesan terlebih dahulu!', 400);
        }

        return response('reply: ' . htmlspecialchars($pesan, ENT_QUOTES, 'UTF-8'));
    }
}