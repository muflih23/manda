<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonfirmasiController extends Controller
{
    public function konfirmasi($id)
    {
        //bromo
        if ($id == "hwT1599090008")
        {
            return view('konfirmasiBromo');
        }

        //rinjani
        elseif ($id == "IXb1599090159")
        {
            return view('konfirmasiRinjani');
        }

        //batur
        elseif ($id == "kcC1599090099")
        {
            return view('konfirmasiBatur');
        }

        //prau
        elseif ($id == "vUO1599090141")
        {
            return view('konfirmasiPrau');
        }
    }
}
