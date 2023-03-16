@extends('layout.mainmenu')

@section('title','Chat')

@section('isi')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 col-sm-10">
            <nav class="navbar navbar-expand-lg navbar-expand-sm navbar-light">
                <a href="{{url('/explore')}}">
                    <img src="{{asset('kodingan/bahan buat design webnya/Catinder.png')}}" class="logo_nav">
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/explore')}}">Explore</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link active" href="#">Chat</a>
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
        <div class="col-lg-2 col-sm-2 pt-3">
            <img id="menu-filter" src="{{asset('kodingan/bahan buat design webnya/paw.png')}}" onclick="show()"/>
        </div> 
    </div>
</div>
<div id="sidebar-filter" class="sidebar-filter">
    <h2><a href="javascript:void(0)" class="close" onclick="hide()">X</a></h2>
    <h2>Closest Vet</h2>
    <h3>Bromo Pet Clinic</h3>
    <p>Seroja St. No. 73,</p>
    <p>Jagakarsa, South Jakarta</p>
    <p>0812 1825 7654</p>
    <p>4.6 Stars (11 Review)</p>
    <h3>Klinik Alit Vet</h3>
    <p>Fatmawati Raya St. No. 3,</p>
    <p>Cilandak, South Jakarta</p>
    <p>0858 9120 2093</p>
    <p>4.4 Stars (254 Review)</p>
</div>
<div class="about mt-5 marginleft">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 bg_brown">
                <h1 class="pembaca">Match</h1>
            </div>
            <div class="col-lg-6 bg_white">
                <h1 class="pembaca">Miftahul Fikri</h1>
            </div>
        </div>
        <div class="row">  
            <div class="col-lg-3 bg_white">
                <div class="row mt-4">
                    <div class="col-lg-5">
                        <img width="100" src="{{asset('kodingan/bahan buat design webnya/user.png')}}" alt="">
                    </div>
                    <div class="col-lg-7">
                        <br><p class="namachat">Mifthahul Fikri</p>
                        <p>pondok labu, Jakarta</p>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-lg-5">
                        <img width="100" src="{{asset('kodingan/bahan buat design webnya/user.png')}}" alt="">
                    </div>
                    <div class="col-lg-7">
                        <br><p class="namachat">Muh  Irfan</p>
                        <p>pondok labu, Jakarta</p>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-lg-5">
                        <img width="100" src="{{asset('kodingan/bahan buat design webnya/user.png')}}" alt="">
                    </div>
                    <div class="col-lg-7">
                        <br><p class="namachat">Ghaitsa AM</p>
                        <p>pondok labu, Jakarta</p>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-lg-5">
                        <img width="100" src="{{asset('kodingan/bahan buat design webnya/user.png')}}" alt="">
                    </div>
                    <div class="col-lg-7">
                        <br><p class="namachat">Isma'il MF</p>
                        <p>pondok labu, Jakarta</p>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-lg-5">
                        <img width="100" src="{{asset('kodingan/bahan buat design webnya/user.png')}}" alt="">
                    </div>
                    <div class="col-lg-7">
                        <br><p class="namachat">Nayla Dania</p>
                        <p>pondok labu, Jakarta</p>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-lg-5">
                        <img width="100" src="{{asset('kodingan/bahan buat design webnya/user.png')}}" alt="">
                    </div>
                    <div class="col-lg-7">
                        <br><p class="namachat">Rafdi RZ</p>
                        <p>pondok labu, Jakarta</p>
                    </div>
                </div>


            <div class="col-lg-6 bg_brown">

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