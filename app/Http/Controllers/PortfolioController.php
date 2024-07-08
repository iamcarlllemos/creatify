<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{

    public function index(string $type) {
        $allowed = [
            'about',
            'skills',
            'projects',
            'offers',
            'template'
        ];

        if(in_array($type, $allowed)) {
            return view('portfolio', compact('type'));
        }
    }

}
