@extends('layout.mainlogin')

@section('title','Onboarding Catinder')

@section('isi')
<div class="onboard ">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <img id="logo" src="{{asset('kodingan/bahan buat design webnya/Catinder.png')}}">
                </div>
            </div>
            <div class="isi">
                <div class="isi_kiri">
                    <p class="pembuka"> Dear,</p>
                    <div class="kotak">
                        <h1 class="pembaca">Cat Lovers!</h1>
                    </div>
                    <div class="pesan padding_10">
                        <p>We made this app solemnly for helping your cat get their dates, we 
                            know how sad you'll feel when your cat is in their mating season and 
                            there's no other cat for them to make love and babies. We hope that with 
                            this app many families will be Purrfectly happy welcoming the newborn 
                            kittens and don't worry about the mating process, because we
                            collaborate with some vet so you can feel safe about your cat.</p>
                        <p>So, please enjoy this app and get the Purrfect soulmate for your cat. </p>  
                    </div>
                    <div class="row">
                        <div class="col align-self-end">
                            <div class="ttd padding_10">
                                <p >From your lovely developer,</p><br>
                                <p class="pembuat">Catinder</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="button">
                            <div class="bt_login">
                            <a href="{{url('/login')}}">Login</a>
                            </div>
                            <div class="bt_daftar">
                            <a href="{{url('/signup')}}">Sign Up</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="isi_kanan">
                    <img src="{{asset('kodingan/bahan buat design webnya/kucing right.png')}}" class="kucing">
                </div>
            </div>
            <div class="row"></div>
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