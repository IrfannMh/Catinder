@extends('layout.mainmenu')

@section('title','Explore')

@section('isi')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 col-sm-8">
            <nav class="navbar navbar-expand-lg navbar-expand-sm navbar-light">
                <a href="">
                    <img src="{{asset('kodingan/bahan buat design webnya/Catinder.png')}}" class="logo_nav">
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{url('/explore')}}">Explore</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/chat')}}">Chat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/vet')}}">Vet</a>
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
    <h3>Race</h3>
    <p>Anggora</p>
    <p>Bengal</p>
    <p>Munchkin</p>
    <p>Persian</p>
    <p>Ragdoll</p>
    <p>Shorthair</p>
    <p>Siberian</p>
    <h3>Gender</h3>
    <p>Female</p>
    <p style="color: red;">Male</p>
    <h3>Age</h3>
    <p>Less than 1 years</p>
    <p style="color: red;">1 - 2 years</p>
    <p>More than 2 years</p>
    <h3>Distance</h3>
    <p>Less than 3 Km</p>
    <p style="color: red;">3 - 7 Km</p>
    <p>More than 7 Km</p>
</div>
<div class="container">
    @foreach ($pets as $item)
        
    <div class="row mt-5">
        <div class="col-lg-6 ">
            <h1 class="pembaca bg_brown">{{ $item->nama}}</h1>
            <div class="row mt-3">
                <ul class="info_pet">
                    <li>{{ $item->umur}}</li>
                    <li>{{ $item->kelamin}}</li>
                    <li>{{ $item->jenis}}</li>
                    <li>{{ $item->vaksin}}</li>
                </ul>
            </div>
            
            <div class="row margin50">
                <div class="col-lg-2">
                    <img class="prof_expl" src="{{asset('kodingan/bahan buat design webnya/user.png')}}" >
                </div>
                <div class="col-lg-10">
                    <ul class="info_pemilik">
                        <li><h1 class="pemilikpet">{{$item->user->name}}</h1></li>
                        <li>{{$item->user->address}}</li>
                        <li>5 km</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-6 ">
            
            <img class="profil_pet padding_left" src="{{ asset('pet/'. $item->image)}}" >

            <a href="">
                <img type="button" class="btn_expl" onclick="love()" src="{{asset('kodingan/bahan buat design webnya/love.png')}}">
            </a>
            
            {{-- <a href="">
                <img type="button" onclick="skip()" src="{{asset('kodingan/bahan buat design webnya/skip.png')}}" ">
            </a> --}}
        </div>
        @endforeach
    </div>
    <div class="row mt-4">
        <div class="col">
            <div class="float-right ">
                {{ $pets->links() }}
            </div>
        </div>
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