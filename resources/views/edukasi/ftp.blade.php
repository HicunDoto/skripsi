@extends('layout.edukasi')

@section('title','edukasi')

@section('container')
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Edukasi FTP</h5>
    <p class="card-text">Berikut video edukasi cara menambal celah pada service FTP</p>
    <p class="card-text"><small class="text-muted">Achmad Syaichul Hadi</small></p>
  </div>
  <video class="card-img-bottom" controls >
    <source src="{{URL::asset('/ftp.mp4')}}" type="video/mp4">
    </video>
</div>
@endsection