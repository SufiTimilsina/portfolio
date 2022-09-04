<?php

namespace App\Http\Controllers;
use App\Models\about;
use App\Models\Skill;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function getabout()
    {
        $list = [
            'aboutlist' => About::all(),
            'skilllist' => Skill::all()
        ];
        return view('pages.about', $list);
        }
}
