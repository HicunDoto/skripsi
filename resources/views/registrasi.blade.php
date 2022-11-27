@extends('layout.main')

@section('title','Registrasi')

@section('container')
<div class="container">
    <div class="card card-container">
    @if (session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
     @endif
        <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
        <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
        <p id="profile-name" class="profile-name-card">Register</p>
        <form class="form-signin" method="post" action="{{url('/registrasi')}}">
          {{csrf_field()}}
            <input type="text" value="{{ old('nama') }}" id="inputEmail" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama" autofocus>
            @error('nama')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <span id="reauth-email" class="reauth-email"></span>
            <input type="email" value="{{ old('email') }}" id="inputEmail" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" autofocus>
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="password" value="{{old('password')}}" id="inputPassword" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" >
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="password" value="{{old('confirm-password')}}" id="inputPassword" name="confirm-password" class="form-control @error('confirm-password') is-invalid @enderror" placeholder="Confirm Password" >
            @error('confirm-password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button name="masuk" class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Daftar</button>
        </form><!-- /form -->
        <p>Sudah punya akun?
            <a href="{{url('/login')}}" class="forgot-password">
                Login!
            </a>
        </p>
        <div style="text-align: center;">Created By <b>HicunDoto<b></div>
    </div><!-- /card-container -->
</div><!-- /container -->

@endsection