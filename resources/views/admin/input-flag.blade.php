@extends('layout.soal')

@section('title','Tambah Soal')

@section('table-responsive')
   <div class="col-6">   
      <h4>Tambah soal</h4>
      @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
      @endif
      <form method="post" action="/admin/input-flag/{{$soal->id_soal}}">
      	@csrf
  <div class="form-group">
    <label>Flag</label>
    <input type="text" name="flag" value="{{ old('flag') }}" class="form-control @error('flag') is-invalid @enderror" placeholder="EDUKASI{FLAG}">
    @error('flag')
    	<div class="alert alert-danger">{{ $message }}</div>
	  @enderror
  </div>
  <div class="form-group">
    <label>Edukasi</label>
    <input type="text" name="edukasi" value="{{ old('edukasi') }}" class="form-control @error('edukasi') is-invalid @enderror" placeholder="Link Edukasi">
    @error('edukasi')
    	<div class="alert alert-danger">{{ $message }}</div>
	  @enderror
  </div>
  <div class="form-group" hidden>
  <input type="text" name="id_soal" hidden value="{{$soal->id_soal}}">
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>
@endsection