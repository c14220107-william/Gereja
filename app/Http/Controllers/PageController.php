<?php

namespace App\Http\Controllers;

use App\Models\YouTubeLink;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about() {
        return view('about');
    }
    public function faq() {
        return view('faq');
    }
    public function onlineworship(){
        $youtubeLink = YouTubeLink::latest()->first();

        // $youtubeLink->url = str_replace('watch?v=', 'embed/', $youtubeLink->url);

        return view('onlineworship',compact('youtubeLink'));
    }
    public function tes(){
        return view('admin/tes');
    }
    
    
}
