<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function getblog()
    { 
         $list = [
        'bloglist' => Blog::all()
    ];

        return view('pages.blog', $list);
        }

        function readblog($id){
            $blog = DB::table('blogs')->find($id);
            return view('pages.readblog', ['blog'=>$blog]);
        } 
}