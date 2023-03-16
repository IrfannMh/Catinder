@extends('layout.mainmenu')

@section('title','About Catinder')


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
                        <a class="nav-link active" href="#">About</a>
                    </li>    
                </ul>
                <a href="{{url('/profil')}}">
                    <img src="{{asset('kodingan/bahan buat design webnya/user.png')}}" class="profil">
                </a>
            </nav>
        </div>
    </div>
</div>
<div class="about mt-5">
    <div class="container">
        <div class="row">
            <div class="kotak_menu">
                <h1 class="pembaca">Our Team</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="symptom d-flex kanan">
                    <div class="img">
                        <img src="{{asset('kodingan/bahan buat design webnya/irpan BW.png')}}" class="img-fluid">
                    </div>
                    <div class="text">
                        <h3>Muhammad Irfan</h3>
                        <p>1810511039</p>
                        <p>Main Programmer</p>
                        <p>Quality Control</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 mb-4">
                <div class="symptom d-flex kiri">
                    <div class="img">
                        <img src="{{asset('kodingan/bahan buat design webnya/Image 8.png')}}" alt="Image" class="img-fluid">
                    </div>
                    <div class="text">
                        <h3>Isma'il M Falih</h3>
                        <p>1810511041</p>
                        <p>Project Manager</p>
                        <p>Designer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="symptom d-flex kanan">
                    <div class="img">
                        <img src="{{asset('kodingan/bahan buat design webnya/Image 10.png')}}" class="img-fluid">
                    </div>
                    <div class="text">
                        <h3>Ghaitsa Amany M</h3>
                        <p>1810511040</p>
                        <p>System Analyst</p>
                        <p>Side Designer</p>
                    </div>
                </div>
            </div>
    
            <div class="col-lg-6 mb-4">
                <div class="symptom d-flex kiri">
                    <div class="img">
                        <img src="{{asset('kodingan/bahan buat design webnya/fikri profile BW.png')}}" class="img-fluid">
                    </div>
                <div class="text">
                    <h3>Mifthahul Fikri</h3>
                    <p>1810511046</p>
                    <p>Side Programmer</p>
                    <p>Quality Control</p>
                </div>
                </div>
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