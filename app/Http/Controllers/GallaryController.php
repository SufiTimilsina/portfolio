<?php

namespace App\Http\Controllers;
use App\Models\Gallary;
use Illuminate\Http\Request;

class GallaryController extends Controller
{
    public function getgallary()
    {
        return view('pages.gallary');
        }
}
