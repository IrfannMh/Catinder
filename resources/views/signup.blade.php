@extends('layout.mainlogin')

@section('title','Register Catinder')

@section('isi')
<div class="onboard ">
    <div class="container">
        <div class="row">
            <div class="col text-center padding_10">
                <img id="logo" src="{{asset('kodingan/bahan buat design webnya/Catinder.png')}}">
            </div>
        </div>
        <div class="isi">
            <div class="isi_kiri">
                <div class="kotak">
                    <h1 class="pembaca">Sign Up</h1>
                </div>
                <form class="form-signin" method="POST" action="{{ route('signup') }}">
                {{csrf_field()}}
                    <div class="form-group mt-4">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control garisbawah {{ $errors->has('email') ? 'is-invalid' : ''}}" id="inputEmail" placeholder="Enter email" name="email" value="{{ old('email') }} " require>
                        @if ($errors->has('email'))
                            {{ $errors->first('email')}}
                            <div class="invalid-feedback">
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="nama">Name:</label>
                        <input type="nama" class="form-control garisbawah {{ $errors->has('name') ? 'is-invalid' : ''}}" id="inputNama" placeholder="Enter Name" name="name" value="{{ old('name') }}" required>
                        @if ($errors->has('name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name')}}
                            </div>
                        @endif
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="age">Age:</label>
                        <input type="integer " class="form-control garisbawah {{ $errors->has('age') ? 'is-invalid' : ''}}" id="inputage" placeholder="Insert age" name="age" value="{{ old('age') }}" required>
                    </div>
                    
                    <div class="form-group">
                        <input type="hidden" class="form-control " id=""  name="level" value="user">
                    </div>

                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control garisbawah {{ $errors->has('password') ? 'is-invalid' : ''}}" id="inputPassword" placeholder="Enter password" name="password" required>
                        @if ($errors->has('password'))
                            <div class="invalid-feedback">
                                {{ $errors->first('password')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="password">Confirm Password:</label>
                        <input type="password" class="form-control garisbawah {{ $errors->has('password_confirmation') ? 'is-invalid' : ''}}" id="inputPassword" placeholder="Confirm password" name="password_confirmation" required>
                        @if ($errors->has('password_confirmation'))
                            <div class="invalid-feedback"> {{ $errors-has('password_confirmation') ? 'is-invalid' : ''}}
                                {{ $errors->first('password_confirmation')}}
                            </div>
                        @endif
                    </div>
                    <a href="{{url('/login')}}">
                        <p style="color: red;">Already have an account?</p>
                    </a>
                    <button class="btn btn-danger" type="submit">Sign Up</button>
                    {{-- <button type="submit">
                    <img  src="{{asset('kodingan/bahan buat design webnya/Icon awesome-arrow-circle-right.png')}}" class="bt_login3" >
                </button> --}}
                </form>
                       
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