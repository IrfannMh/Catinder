@extends('layout.mainmenu')

@section('title','Data Vet')

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
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <Strong>Daftar Klinik/ Vet</Strong>
            </div>
            <div class="float-right">
                <a href="{{url('admin/addVet')}}" class="btn btn-danger btn-sm">
                    Add
                </a>
            </div>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name Vet</th>
                        <th>Address</th>
                        <th>Telephone</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vets as $item)
                    <tr>
                        <th>{{ $loop->iteration}}</th>
                        <th>{{ $item->name}}</th>
                        <th>{{ $item->alamat}}</th>
                        <th>{{ $item->telephone}}</th>
                        <th>{{ $item->email}}</th>
                    </tr>   
                    @endforeach
                </tbody>
            </table>
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