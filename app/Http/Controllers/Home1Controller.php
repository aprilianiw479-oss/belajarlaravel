<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home1Controller extends Controller
{
    public function home()
    {
        return view ('home');
    }

    public function about()
    {
        return view ('about');
    }

    public function artikel_berita()
    {
        return view ('artikel.berita');
    }

    public function user()
    {
        return view ('user');
    }

    public function product($id) {
        return view ('product', ['id' => $id]);
    }
}
