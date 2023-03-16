@extends('layout.mainmenu')

@section('title','Vet Catinder')

@section('isi')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 col-sm-12">
            <nav class="navbar navbar-expand-lg navbar-expand-sm navbar-light">
                <a href="">
                    <img src="{{asset('kodingan/bahan buat design webnya/Catinder.png')}}" class="logo_nav">
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/explore')}}">Explore</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/chat')}}">Chat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Vet</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{url('/about')}}">About</a>
                    </li>    
                </ul>
                <a href="{{url('/profil')}}">
                    <img src="{{asset('kodingan/bahan buat design webnya/user.png')}}" class="profil">
                </a>
            </nav>
        </div>
        <div class="col-lg-2 pt-3">
            <img id="menu-filter" src="{{asset('kodingan/bahan buat design webnya/Icon awesome-filter.png')}}" onclick="show()"/>
        </div>  
    </div>
</div>
<div id="sidebar-filter" class="sidebar-filter">
    <h2><a href="javascript:void(0)" class="close" onclick="hide()">X</a></h2>
    <h2>Filter</h2>
    <h3>Distance</h3>
    <p>Less than 3 Km</p>
    <p style="color: red;">3 - 7 Km</p>
    <p>More than 7 Km</p>
    <h3>Stars</h3>
    <p style="color: red;">More than 3.9 Stars</p>
    <p>2.1 - 3.8 Stars</p>
    <p>Less than 2 Stars</p>
    <h2>Sort By</h2>
    <h3 style="color: red;">Distance</h3>
    <h3>Stars</h3>
    <h3>Review</h3>
</div>

<div class="about mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 bg_brown">
                <h1 class="pembaca">Clinic</h1>
            </div>
            <div class="col-lg-3 bg_white">
                <h1 class="pembaca">Details</h1>
            </div>
        </div>
        
        @foreach ($vets as $item)
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="symptom d-flex ">
                    <div class="img">
                        <img src="{{asset('kodingan/bahan buat design webnya/paw B.png')}}">
                    </div>
                    <div class="text">
                        <h3>{{ $item->name }}</h3>
                        <p>{{ $item->alamat }}</p>
                        <p>{{ $item->kota }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="symptom d-flex ">
                    <div class="text white">
                        <p> <img class="icon_vet" src="{{asset('kodingan/bahan buat design webnya/star.png')}}">   4.5 (280 views)</p>
                        <p> <img class="icon_vet" src="{{asset('kodingan/bahan buat design webnya/phone.png')}}">  {{ $item->telephone }}</p>
                        <p> <img class="icon_vet" src="{{asset('kodingan/bahan buat design webnya/email.png')}}">  {{ $item->email }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    
    
    </div>
</div>
@endsection

@section('footer')
    <!--footer-->
    <div class="row"></div>
    <div class="footer">
        <div class="container-fluid ">
            <div class="row ">
                <div class="col-lg-4 col-sm-5">
                    <div class="contact">
                        <p>Contact Us:</p>
                        <div class="sosmed">
                            <img class="ig img_1" src="{{asset('kodingan/bahan buat design webnya/Icon awesome-instagram.png')}}" />
                            <img class="twit img_1" src="{{asset('kodingan/bahan buat design webnya/Icon awesome-twitter.png')}}" />
                            <img class="fb img_1" src="{{asset('kodingan/bahan buat design webnya/Icon awesome-facebook-f.png')}}" />
                            <img class="yt img_1" src="{{asset('kodingan/bahan buat design webnya/Icon awesome-youtube.png')}}" />    
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-7">
                    <img src="{{asset('kodingan//bahan buat design webnya/Intersection 3crop.png')}}" class="garis">
                </div>
            </div>
        </div>
    </div>
    <!--end footer-->
@endsection