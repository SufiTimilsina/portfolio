<?php

namespace App\Http\Controllers;
use App\Models\about;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function getabout()
    {
        return view('pages.about');
        }
}
