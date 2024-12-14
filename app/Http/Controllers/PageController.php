<?php

namespace App\Http\Controllers;

use App\Models\YouTubeLink;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index() {
        return view('home');
    }

    public function about() {
        return view('about');
    }
    public function faq() {
        return view('faq');
    }
    public function onlineworship(){
        $youtubeLink = YouTubeLink::latest()->first();

        $currentTime = Carbon::now('Asia/Jakarta');

        // Rentang waktu ibadah
        $startTime = Carbon::createFromTime(7, 45, 0, 'Asia/Jakarta');
        $endTime = Carbon::createFromTime(13, 20, 0, 'Asia/Jakarta');

        // Cek apakah waktu saat ini adalah hari Minggu dan dalam rentang waktu
        $isWorshipTime = $currentTime->isSunday() && $currentTime->between($startTime, $endTime);


        // $youtubeLink->url = str_replace('watch?v=', 'embed/', $youtubeLink->url);

        // // Rentang waktu ibadah untuk testing
        // $startTime = Carbon::createFromTime(7, 45, 0, 'Asia/Jakarta');
        // $endTime = Carbon::createFromTime(22, 20, 0, 'Asia/Jakarta');

        // // Cek apakah waktu saat ini adalah hari Minggu dan dalam rentang waktu
        // $isWorshipTime = $currentTime->isSaturday() && $currentTime->between($startTime, $endTime);



        return view('onlineworship',compact('youtubeLink','isWorshipTime'));
    }
    
    public function form() {
        return view('service-registration');
    }
    
    
}
