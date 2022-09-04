<?php

namespace App\Http\Controllers;
use App\Models\Gallary;
use App\Models\portfolio;
use Illuminate\Http\Request;

class GallaryController extends Controller
{
    public function getgallary()
    {
        $list = [
            'portfoliolist' => portfolio::all(),
            'gallarylist' => Gallary::all()
        ];
        return view('pages.gallary' , $list);
        }
}
