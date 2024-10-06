<?php

namespace App\Http\Controllers;

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
        return view('onlineworship');
    }
    public function tes(){
        return view('admin/tes');
    }
    
}
