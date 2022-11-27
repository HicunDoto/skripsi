@extends('layout.edukasi')

@section('title','edukasi')

@section('container')
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Edukasi RCE</h5>
    <p class="card-text">Berikut video edukasi cara menambal celah REMOTE CODE EXECUTION pada WEB service</p>
    <p class="card-text"><small class="text-muted">Achmad Syaichul Hadi</small></p>
  </div>
  <video class="card-img-bottom" controls >
    <source src="{{URL::asset('/rce.mp4')}}" type="video/mp4">
    </video>
</div>
@endsection