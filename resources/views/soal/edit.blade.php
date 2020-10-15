@extends('layout.soal')

@section('title','Edit Soal')

@section('table-responsive')
   <div class="col-6">   
      <h4>Edit soal</h4>
      <form method="post" action="/soal/{{$soal->id}}">
        @method('put')
      	@csrf
  <div class="form-group">
    <label>Judul Soal</label>
    <input type="text" name="soal" value="{{$soal->soal}}" class="form-control @error('soal') is-invalid @enderror" placeholder="Judul soal">
    @error('soal')
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
    <label>Status Soal</label>
    <select class="form-control" name="aktif_soal" placeholder="Kategori soal">
      @if ($soal->aktif_soal=="1")
      <option selected value="1">Aktif</option>
      <option value="0">Tidak Aktif</option>
      @elseif($soal->aktif_soal=="0")
      <option value="1">Aktif</option>
      <option selected value="0">Tidak Aktif</option>      
      @endif
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Simpan Edit</button>
</form>
</div>
@endsection