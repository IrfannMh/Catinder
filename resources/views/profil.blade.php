@extends('layout.mainmenu')

@section('title','Profil Akun')

@section('isi')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-sm-12">
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
                        <a class="nav-link" href="{{url('/vet')}}">Vet</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{url('/about')}}">About</a>
                    </li>    
                </ul>
            </nav>
        </div>
    </div>
</div>
<div class="about mt-5">
    <div class="container">
        <form action="{{ route('updateprofil')}}" method="POST">
            {{ csrf_field() }}
        <div class="row">
            <div class="col-lg-1">
                <img src="{{asset('kodingan/bahan buat design webnya/user.png')}}" class="foto">
            </div>
            <div class="col-lg-5 bg_brown">
                {{-- <h1 class="pembaca" >{{ Auth::user()->name }}</h1> --}}
                <input class="frmsname" type="name"  name="name" placeholder="Insert Name"  value="{{ Auth::user()->name }}" />
            </div>
            <div class="col-lg-2 bg_white">
                <h1 class="pembaca">Buddy</h1>
            </div>
        </div>
        <div class="row padding_10">
            <div class="col-lg-1">
            </div>
            <div class="col-lg-5">
                
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control garisbawah" id="email" value="{{ Auth::user()->email }}" name="email">
                    </div>
                    <div class="form-group">
                        <label for="age">Age:</label>
                        <input type="age" class="form-control garisbawah" id="age" value="{{ Auth::user()->age }}" name="age">
                    </div>
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="address" class="form-control garisbawah" id="address" value="{{ Auth::user()->address }}" name="address">
                    </div>
                    
                    {{-- <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control garisbawah" id="password" value="{{ Auth::user()->password }}" name="password">
                    </div> --}}
                    <div class="row mt-3">
                        <div class="col-lg-6">
                            <a href="{{ route('logout') }}" class="logout">Log out</a>
                        </div>
                        <div class="col-lg-6">
                            <button class="btn btn-danger" type="submit"> Update Profil</button>
                         
                        </form>
                            {{-- <img type="button" src="{{asset('kodingan/bahan buat design webnya/Icon awesome-check-circle.png')}}" class="bt_save" > --}}
                
                    </div>
                    </div>
                   
            </div>
            <div class="col-lg-6">
                <div class="row">
                    @foreach ($user as $item)
                        <img src="{{ asset('pet/'. $item->image)}}" width="150" height="200" class="mr-3 ml-3 mb-3">
                    @endforeach
                    <a href="{{ url('addbuddy')}}">
                        <img src="{{asset('kodingan/bahan buat design webnya/add kucing.png')}}"  width="150" height="200" class="ml-3">
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
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