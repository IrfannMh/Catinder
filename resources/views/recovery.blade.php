@extends('layout.mainlogin')

@section('title','Recovery Password Catinder')

@section('isi')
<div class="onboard ">
    <div class="container">
        <div class="row">
            <div class="col text-center padding_10">
                <img id="logo" src="{{asset('kodingan/bahan buat design webnya/Catinder.png')}}">
            </div>
        </div>
        <div class="isi padding_40">
            <div class="isi_kiri">
                <div class="kotak">
                    <h1 class="pembaca">Recovery Password</h1>
                </div>
                    <form action="#">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control garisbawah" id="email" placeholder="Enter email" name="">
                        </div>
                        <p style="color: red;">Enter your email linked to your account,</p>
                        <p style="color: red;">we will send your password reset option.</p>
                        
                        <div class="row">
                            <a href="{{url('/login')}}"><img type="button"  src="{{asset('kodingan/bahan buat design webnya/panah kiri.png')}}" class="back" ></a>
                            <a href="{{url('/login')}}"><img type="button" onclick="sent()" src="{{asset('kodingan/bahan buat design webnya/Icon awesome-arrow-circle-right.png')}}" class="bt_login2 " ></a>
                        </div>
                    </form>
                   
            </div>
                <div class="isi_kanan">
                    <img src="{{asset('kodingan/bahan buat design webnya/kucing right.png')}}" class="kucing">
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