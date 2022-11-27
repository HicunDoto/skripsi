@extends('layout.soal')

@section('title','Edit Soal')

@section('table-responsive')
   <div class="col-6">   
      <h4>Edit soal</h4>
      <form method="post" action="/admin/{{$soal->id_soal}}">
        @method('put')
      	@csrf
  <div class="form-group">
    <label>Judul Soal</label>
    <input type="text" name="nama_soal" value="{{$soal->nama_soal}}" class="form-control @error('nama_soal') is-invalid @enderror" placeholder="Judul soal">
    @error('nama_soal')
    	<div class="alert alert-danger">{{ $message }}</div>
	@enderror
  </div>
  <div class="form-group">
    <label>Keterangan Soal</label>
   <textarea class="form-control  @error('keterangan') is-invalid @enderror" name="keterangan" rows="3" placeholder="Keterangan soal">{{ $soal->keterangan }}</textarea>
   	@error('keterangan')
   		<div class="alert alert-danger">{{ $message }}</div>
   	@enderror
  </div>
  <div class="form-group">
    <label>Nilai Soal</label>
    <select class="form-control" name="nilai" placeholder="Nilai soal">
      @if ($soal->nilai=="25")
      <option selected value="25">25</option>
      <option value="50">50</option>
      <option value="100">100</option>
      @elseif($soal->nilai=="50")
      <option value="25">25</option>
      <option selected value="50">50</option>
      <option value="100">100</option>      
      @else
      <option value="25">25</option>
      <option value="50">50</option>
      <option selected value="100">100</option>  
      @endif
    </select>
  </div>
  <div class="form-group">
    <label>Clue Soal</label>
   <input class="form-control  @error('clue') is-invalid @enderror" type="text" name="clue" placeholder="Clue soal" value="{{ $soal->clue }}">
   	@error('clue')
   		<div class="alert alert-danger">{{ $message }}</div>
   	@enderror
  </div>
  <div class="form-group">
    <label>Kategori Soal</label>
    <select class="form-control" name="kategori" placeholder="Kategori soal">
      @if ($soal->kategori=="web")
      <option value="server">Server</option>
      <option selected value="web">Web</option>
      @elseif($soal->kategori=="server")
      <option selected value="server">Server</option>
      <option value="web">Web</option>      
      @endif
    </select>
  </div>
  <div class="form-group">
    <label>Waktu Soal</label>
    <select class="form-control" name="waktu" placeholder="Waktu soal">
      <option value="21600">6 Jam</option>
    </select>
  </div>
    <div class="form-group">
    <label>Status Soal</label>
    <select class="form-control" name="aktif_soal" placeholder="Kategori soal">
      @if ($soal->aktif_soal=="aktif")
      <option selected value="aktif">Aktif</option>
      <option value="tidak">Tidak Aktif</option>
      @elseif($soal->aktif_soal=="tidak")
      <option value="aktif">Aktif</option>
      <option selected value="tidak">Tidak Aktif</option>      
      @endif
    </select>
  </div>
  <div class="form-group">
    <label>Flag Soal</label>
    <input type="text" name="flag" value="{{$flag->flag}}" class="form-control @error('flag') is-invalid @enderror" placeholder="EDUKASI{FLAG}">
    @error('flag')
    	<div class="alert alert-danger">{{ $message }}</div>
	@enderror
  </div>
  <div class="form-group">
    <label>Link Edukasi Soal</label>
    <input type="text" name="edukasi" value="{{$flag->edukasi}}" class="form-control @error('edukasi') is-invalid @enderror" placeholder="Link Edukasi">
    @error('edukasi')
    	<div class="alert alert-danger">{{ $message }}</div>
	@enderror
  </div>
  <button type="submit" class="btn btn-primary">Simpan Edit</button>
</form>
</div>
@endsection