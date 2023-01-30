<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KullaniciController extends Controller
{
    public function kaydol()
    {
        return view('kullanici.kaydol');
    }
    public function giris_form()
    {
        return view('kullanici.oturumac');
    }
    public function sifre_form()
    {
        return view('kullanici.sifre_sifirla');
    }
}
