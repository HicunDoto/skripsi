@extends('layout.soal')

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
                    <input type="" hidden="" name="" value="">
                      <h4 class="modal-title">{{$soal->soal}} - {{$soal->kategori}}</h4>
                  </div>
                  <div class="modal-body">
                    <p><h6><td>Keterangan Soal </td><td> :</td><td> {{$soal->keterangan}}</td></h6></p>
                    <p><h6><td>Status Soal </td><td> :</td><td>@if ($soal->aktif_soal=="1")
                  <span class="badge badge-success">Aktif</span>
                @elseif($soal->aktif_soal=="0")
                  <span class="badge badge-dark">Tidak Aktif</span>
                @else
                  <span class="badge badge-danger">Error</span>
                @endif</td></h6></p>
                <a href="{{$soal->id}}/edit" class="btn btn-outline-info"><span data-feather="edit"></span> Edit</a>
                <form action="/soal/{{$soal->id}}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button type="submit" class="btn btn-outline-danger"><span data-feather="trash"></span> Hapus</button>
                </form>
                <a href="{{url('/soal')}}" class="btn badge badge-pill badge-light"><span data-feather="chevrons-left"></span> Kembali</a>
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