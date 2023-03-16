@extends('layout.mainmenu')

@section('title','Add Vet Admin')

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
                        <a class="nav-link" href="{{url('adminUser')}}">User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('adminVet')}}">Vet</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('logout') }}">Log out</a>
                    </li>   
                </ul>
            </nav>
        </div>
    </div>
</div>
<div class="container mt-3">
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <Strong>Add Klinik/ Vet</Strong>
            </div>
            <div class="float-right">
                <a href="{{ route('adminVet')}}" class="btn btn-dark btn-sm">
                    Back
                </a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{url('adminVet')}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <Label>Nama Klinik</Label>
                    <input type="text" name="name" class="form-control" autofocus required>
                </div>
                <div class="form-group">
                    <Label>Alamat Klinik</Label>
                    <input type="text" name="alamat" class="form-control" autofocus required>
                </div>
                <div class="form-group">
                    <Label>Kota Klinik</Label>
                    <input type="text" name="kota" class="form-control" autofocus required>
                </div>
                <div class="form-group">
                    <Label>Telephone Klinik</Label>
                    <input type="text" name="telephone" class="form-control" autofocus required>
                </div>
                <div class="form-group">
                    <Label>Email Klinik</Label>
                    <input type="text" name="email" class="form-control">
                </div>
                <button type="submit" class="btn btn-danger">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection

{{-- @section('footer')
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
@endsection --}}