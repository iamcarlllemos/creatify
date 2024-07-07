<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function about() {
        $tab = 'about';
        return view('portfolio', compact('tab'));
    }

    public function skills() {
        $tab = 'skills';
        return view('portfolio', compact('tab'));
    }
}
