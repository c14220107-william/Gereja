<?php

namespace App\Http\Controllers;

use App\Models\YouTubeLink;
use Carbon\Carbon;
use Illuminate\Http\Request;

class linkYoutubeController extends Controller
{


    public function index(){

        $link = YouTubeLink::latest()->first();
        

        return view('admin.manajemen_liveStreaming.index',compact('link'));
    }
    public function store(Request $request) {
        $request->validate([
            'url' => 'required|url',
        ]);
    
        // Ubah link YouTube menjadi format embed
        $url = $request->url;
        if (strpos($url, 'watch?v=') !== false) {
            $url = str_replace('watch?v=', 'embed/', $url);
        }
    
        // Simpan link YouTube
        YouTubeLink::create([
            'url' => $url,
        ]);
    
        return redirect()->back()->with('success', 'Link YouTube berhasil disimpan!');
    }
    
}
