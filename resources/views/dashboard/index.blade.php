@extends('layout.player')

@section('title','Dashboard')

@section('table-responsive')
@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }} <b>{{Str::upper(auth()->user()->name)}}</b>
</div>
@endif
<ul class="list-group">
<li class="list-group-item active"><h4>Panduan Setting Virtual Machine</h4></li>
<p>
  Berikut video tutorial, cara melakukan setting koneksi ke dalam <strong>virtual machine</strong>
</p>
<center><video width="480" height="240" controls >
<source src="{{URL::asset('/tutorial.mp4')}}" type="video/mp4">
</video></center>
<li class="list-group-item active"><h4>Panduan Menjawab Soal</h4></li>
<p>
  <div class="card mb-3" style="max-width: 940px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="/format.png" class="card-img">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Format FLAG atau JAWABAN</h5>
          <p class="card-text">Menginputkan jawaban dengan format : <b>EDUKASI{}</b></p>
          <p class="card-text"><small class="text-muted">Achmad Syaichul Hadi</small></p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 940px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="/benar.png" class="card-img">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Flag Benar</h5>
          <p class="card-text">Pesan jika <b>Jawaban</b> atau <b>Flag</b> <label style="color: rgb(7, 179, 44)"> benar</label></p>
          <p class="card-text"><small class="text-muted">Achmad Syaichul Hadi</small></p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 940px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="/salah.png" class="card-img">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Flag Salah</h5>
          <p class="card-text">Pesan jika <b>Jawaban</b> atau <b>Flag</b> <label style="color: rgb(184, 16, 16)"> salah</label></p>
          <p class="card-text"><small class="text-muted">Achmad Syaichul Hadi</small></p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 940px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="/sudahbenar.png" class="card-img">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Flag Sudah Benar</h5>
          <p class="card-text">Pesan jika <b>Jawaban</b> atau <b>Flag</b> sudah benar di input kembali</p>
          <p class="card-text"><small class="text-muted">Achmad Syaichul Hadi</small></p>
        </div>
      </div>
    </div>
  </div>
</p>
</ul>
@endsection