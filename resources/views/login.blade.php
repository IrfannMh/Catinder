@extends('layout.mainlogin')

@section('title','Login Catinder')

@section('isi')
<div class="onboard mt-5">
        <div class="container ">
            <div class="row">
                <div class="col text-center padding_10">
                    <img id="logo" src="{{asset('kodingan/bahan buat design webnya/Catinder.png')}}">
                </div>
            </div>
            <div class="isi">
                <div class="isi_kiri">
                    <div class="kotak">
                        <h1 class="pembaca">Login</h1>
                    </div>
                        <form action="{{ route('login') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group mt-3">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control garisbawah" id="inputEmail" placeholder="Enter email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control garisbawah" id="inputPassword" placeholder="Enter password" name="password">
                            </div>
                            <a href="{{url('recovery')}}">
                                <p style="color: red;">Forgot password?</p>
                            </a>
                            <a href="{{url('/signup')}}">
                                <p style="color: red;">Didn't have an account?</p>
                            </a>
                            <button class="btn btn-danger" type="submit">Log In</button>
                            {{-- <a href="">
                                <img type="button" src="{{asset('kodingan/bahan buat design webnya/Icon awesome-arrow-circle-right.png')}}" class="bt_login3" >
                            </a> --}}
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