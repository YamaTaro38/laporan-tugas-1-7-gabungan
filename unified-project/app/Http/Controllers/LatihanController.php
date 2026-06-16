<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function index()
    {
        $data["nama"] = "Muhammad Rafiful Hana";
        $data["asal"] = "Kudus";
        return view('laravel1.v_latihan1', $data);
    }

    public function method2()
    {
        $data['title'] = "Daftar Mahasiswa";
        $data['daf_mhs'] = array(
            array("nama" => "Muhammad", "asal" => "Kudus"),
            array("nama" => "Rafiful", "asal" => "Semarang"),
            array("nama" => "Hana", "asal" => "Demak")
        );
        return view('laravel1.v_latihan2', $data);
    }
}