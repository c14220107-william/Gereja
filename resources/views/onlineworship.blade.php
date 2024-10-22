@extends('layouts.app')

@section('content')
<h1>
    Ibadah Online
</h1>

<head>
    <title>
        Church Website
    </title>
    <style>
        body {
            /* font-family: 'Roboto', sans-serif; */
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .top-bar {
            background-color: #000;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        .top-bar a {
            color: #fff;
            margin: 0 15px;
            text-decoration: none;
        }

        .main-banner {
            display: flex;
            justify-content: center;
            /* Untuk meletakkan konten di tengah secara horizontal */
            align-items: center;
            /* Untuk meletakkan konten di tengah secara vertikal */
            height: 100vh;
            /* Memberikan tinggi 100% dari viewport */
        }

        iframe {
            width: 800px;
            /* Lebar video */
            height: 450px;
            /* Tinggi video */
            border: none;
            /* Menghapus border iframe */
        }

        .main-banner img {
            max-width: 100%;
            height: auto;
        }

        .main-banner .title {
            font-size: 2.5em;
            font-weight: bold;
            margin: 20px 0 10px;
        }

        .main-banner .author {
            font-size: 1.2em;
            color: #666;
            margin-bottom: 20px;
        }

        .main-banner .buttons {
            margin-top: 20px;
        }

        .main-banner .buttons a {
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
            color: #fff;
        }

        .main-banner .buttons .btn-learn {
            background-color: #000;
        }

        .main-banner .buttons .btn-watch {
            background-color: #ff6600;
        }

        .sermons {
            text-align: center;
            padding: 50px 0;
        }

        .sermons h2 {
            font-size: 2em;
            margin-bottom: 10px;
        }

        .sermons p {
            color: #666;
            margin-bottom: 40px;
        }

        .sermons .sermon-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .sermons .sermon-item {
            width: 600px;
            height: 400px;
            margin: 10px;
            background-color: #fff;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .sermons .sermon-item img {
            width: 100%;
            height: auto;
        }

        .sermons .sermon-item .content {
            padding: 10px;
            box-sizing: border-box;
        }

        .sermons .sermon-item .content h3 {
            font-size: 1.2em;
            margin: 0 0 10px;
        }

        .sermons .sermon-item .content p {
            color: #666;
            margin: 0 0 10px;
        }

        .sermons .sermon-item .content .btn-watch {
            text-decoration: none;
            padding: 5px 10px;
            background-color: #ff6600;
            color: #fff;
            border-radius: 5px;
            font-size: 0.9em;
        }

        .small-videos {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .small-video {
            width: 97%;
            /* Lebar video kecil */
            height: 60%;
            margin: 10px 10px 10px;
            Jarak antar video kecil border: none;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .cta {
            background-color: #000;
            color: #fff;
            text-align: center;
            padding: 50px 0;
        }

        .bottom-bar {
            background-color: #fff;
            padding: 30px 0;
            text-align: center;
        }

        .bottom-bar .bottom-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: 0 auto;
        }

        .bottom-bar .bottom-content .bottom-section {
            width: 30%;
            margin: 15px 0;
        }

        .bottom-bar .bottom-content .bottom-section h3 {
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        .bottom-bar .bottom-content .bottom-section p,
        .bottom-bar .bottom-content .bottom-section a {
            color: #666;
            text-decoration: none;
        }

        .bottom-bar .bottom-content .bottom-section a:hover {
            text-decoration: underline;
        }

        .bottom-bar .bottom-content .bottom-section .socials a {
            margin: 0 10px;
            color: #666;
        }

        .cs {
            background-image: url(' ');
            background-size: cover;
            background-position: center;
            border-radius: 15px;
            width: 90%;
            /* Ubah lebar menjadi 90% untuk responsivitas */
            max-width: 800px;
            /* Maksimum lebar 800px */
            height: auto;
            /* Tinggi otomatis */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            padding: 20px;
            color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin: 20px auto;
            /* Center the container with margin */
        }

        .cs h1 {
            font-size: 36px;
            /* Ukuran font yang disesuaikan */
            font-weight: bold;
            margin: 0;
        }

        .cs p {
            font-size: 18px;
            margin: 10px 0 20px;
        }

        iframe {
            border: 4px solid #FDD835;
            /* Color of the border */
            border-radius: 10px;
            /* Rounded corners */
            transition: transform 0.3s;
            /* Smooth transition effect */
        }

        iframe:hover {
            transform: scale(1.02);
            /* Slightly zooms in on hover */
        }
    </style>
</head>

<body>

    @if ($youtubeLink)
        <div class="main-banner flex flex-col items-center bg-gray-100 p-6">
        <h2 class="text-6xl font-serif font-extrabold text-center -mt-6 mb-4">Live Streaming</h2>
        <iframe height="400" src="{{ $youtubeLink->url }}" width="100%" style="max-width: 800px;" allowfullscreen>
        </iframe>
        <p class="text-xl text-center mt-3 text-gray-600">Selamat beribadah, Tuhan Yesus memberkati!</p>
    </div>
    @else
        <p>Belum Ada</p>
        
    @endif
    
   

    <!-- SERMON LIST SECTION -->
    <div class="sermons">
        <h2>
            Sermons
        </h2>
        <p>
            Explore our extensive library of sermons.
        </p>
        <div class="sermon-list">
            <div class="sermon-item">
                <iframe class="small-video" src="https://www.youtube.com/embed/NdzpCeRC9K8?si=sX1c5bOuImnE2akn" allowfullscreen></iframe>
                <div class="content">
                    <h3>
                        Judul Video
                    </h3>
                    <p>
                        Nad
                    </p>
                    <a class="btn-watch" href="#">
                        Watch
                    </a>
                </div>
            </div>
            <div class="sermon-item">
                <iframe class="small-video" src="https://www.youtube.com/embed/VIDEO_ID_2" height="200" allowfullscreen></iframe>
                <div class="content">
                    <h3>
                        Judul video
                    </h3>
                    <p>
                        Nicel
                    </p>
                    <a class="btn-watch" href="#">
                        Watch
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- NEW CONTAINER SECTION
    <div class="cs">
        <h1 style="color: black">
            God wants to use you.
        </h1>
        <p style="color: black">
            We're here to support you regardless of where you are on your faith journey. Let us guide you towards your next step and discover what God has in store for your life.
        </p>
        <a class="btn-learn" href="#" style="color: black;">
            Learn More
        </a>
    </div> -->
</body>
@endsection