@extends('layout.soal')

@section('title','Tambah Soal')

@section('table-responsive')
   <div class="col-6">   
      <h4>Tambah soal</h4>
      <form method="post" action="{{url('/admin/input-soal')}}">

        @csrf
  <div class="form-group">
    <label>Judul Soal</label>
    <input type="text" name="nama_soal" value="{{ old('soal') }}" class="form-control @error('soal') is-invalid @enderror" placeholder="Judul soal">
    @error('nama_soal')
    	<div class="alert alert-danger">{{ $message }}</div>
	@enderror
  </div>
  <div class="form-group">
    <label>Keterangan Soal</label>
   <textarea class="form-control  @error('keterangan') is-invalid @enderror" name="keterangan" rows="3" placeholder="Keterangan soal">{{ old('keterangan') }}</textarea>
   	@error('keterangan')
   		<div class="alert alert-danger">{{ $message }}</div>
   	@enderror
  </div>
  <div class="form-group">
    <label>Clue Soal</label>
   <textarea class="form-control  @error('clue') is-invalid @enderror" name="clue" rows="3" placeholder="Clue soal">{{ old('clue') }}</textarea>
   	@error('clue')
   		<div class="alert alert-danger">{{ $message }}</div>
   	@enderror
  </div>
  <div class="form-group">
    <label>Kategori Soal</label>
    <select class="form-control" name="kategori" placeholder="Kategori soal">
      <option value="server">Server</option>
      <option value="web">Web</option>
    </select>
  </div>
  <div class="form-group">
    <label>Nilai Soal</label>
    <select class="form-control" name="nilai" placeholder="Nilai soal">
      <option value="25">25</option>
      <option value="50">50</option>
      <option value="100">100</option>
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
      <option value="aktif">Aktif</option>
      <option value="tidak">Tidak Aktif</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection