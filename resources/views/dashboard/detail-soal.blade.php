@extends('layout.player')

@section('title','Detail Soal')
@section('table-responsive')
  <!-- Modal -->
{{-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> --}}

<div class="modal fade" id="show" role="dialog">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title w-100 text-center" >{{$soal->nama_soal}} - {{Str::upper($soal->kategori)}}</h4>
                  </div>
                  <div class="modal-body">
                    <p><input type="text" id="waktu" hidden value="{{$soal->waktu}}"></p>
                    <p><h6><td>Keterangan Soal </td><td> :</td><td> {{$soal->keterangan}}</td></h6></p>
                    <p><h6><td>Clue Soal </td><td> :</td><td> <a target="_blank" class="badge badge-info" href="{{$soal->clue}}">Klik Disini</a></td></h6></p>
                  <form method="post" action="/dashboard/{{$soal->id_soal}}">
                    @csrf
                    <div id="waktune"><p><h6><td>Waktu</td><td> :</td><td> <input id="hicun" name="timer" type="hidden" value=""><span id="timer"></span></td></h6></p></div>
                    <div class="input-group-append">
                    <div class="input-group mb-3">
                    <input type="text" class="form-control @error('flag') is-invalid @enderror" placeholder="Flag" id="flag" name="flag" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <button type="submit" class="btn btn-outline-primary input-group-text">Submit</button>
                    </div>
                  </div>
                </form>
                @error('flag')
                      <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                @if (session('benar'))
                <div class="alert alert-success">
                {{ session('benar') }} <a class="badge badge-pill badge-info" href="{{$flag->edukasi}}">Link edukasi</a>
                </div>
                @endif
                @if (session('salah'))
                <div class="alert alert-danger">
                    {{ session('salah') }}
                </div>
                @endif
                <a href="{{url('/dashboard/scoreboard')}}" class="btn badge badge-pill badge-light"><span data-feather="chevrons-left"></span> Kembali</a>
                  </div>
              </div>
          </div>
</div>
     

      {{-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> --}}
{{-- modal --}}
    

@endsection