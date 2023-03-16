@extends('layout.mainmenu')

@section('title','Add Buddy Catinder')

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
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('addbuddy')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
        <div class="row">
            <div class="col-lg-1">
                <img src="{{asset('kodingan/bahan buat design webnya/user.png')}}" class="foto">
            </div>
                
                <div class="col-lg-5 bg_brown">
                    <h1 class="pembaca">Add Buddy</h1>
                    {{-- <input class="frmsname" type="name" id="nama" name="nama" placeholder="Insert Name"  value="" /> --}}
                </div>
                <div class="col-lg-2 bg_white">
                    <h1 class="pembaca">Photo</h1>
                </div>
        </div>
        <div class="row padding_10">
        <div class="col-lg-1"></div>
        <div class="col-lg-5">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="nama" class="form-control garisbawah" id="nama" placeholder="Insert Name Buddy" name="nama" value="">
            </div>
            <div class="form-group">
                <label for="umur">Age:</label>
                <input type="umur" class="form-control garisbawah" id="umur" placeholder="Insert Age" name="umur" value="">
            </div>
            <div class="form-group">
                <label for="kelamin">Gender:</label>
                <input type="kelamin" class="form-control garisbawah" id="kelamin" placeholder="Insert Gender" name="kelamin" value="">
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control " id="user_id"  name="user_id" value="{{ Auth::user()->id }}">
            </div>
            <div class="form-group">
                <label for="jenis">Jenis:</label>
                <input type="jenis" class="form-control garisbawah" id="jenis" placeholder="Insert jenis" name="jenis" value="">
            </div>
            <div class="form-group">
                <label for="vaksin">Vaccine:</label>
                <input type="vaksin" class="form-control garisbawah" id="vaksin" placeholder="Insert Vaccine" name="vaksin" value="">
            </div>
            <div class="row">
                <div class="col-lg-8 float-left">
                    <button class="btn btn-danger" type="submit">Save</button>
                </div>    
                <div class="col-lg-4 float-right">
                    <a href="{{ route('profil') }}" class="btn btn-dark btn-md">
                        Back
                    </a>
                    
                </div>  
            </div>        
            {{-- <div class="float-right">
            </div> --}}
            {{-- <img type="submit" src="{{asset('kodingan/bahan buat design webnya/Icon awesome-check-circle.png')}}" class="bt_save" > --}}
                    
        </div>
        <div class="col-lg-2">
            <div class="form-group">
                <input type="file" name="image" onchange="readURL(this)" class="form-control-file" id="image">
                <br><img id="blah" src="#"  />
            </div>
                    {{-- <img src="{{asset('kodingan/bahan buat design webnya/add kucing.png')}}" class="add_pet"> --}}
            </form>
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