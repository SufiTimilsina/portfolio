<?php

namespace App\Http\Controllers;
use App\Models\About;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $list = [
            'aboutlist' => About::all()
        ];
        return view('welcome', $list);
    }
}
