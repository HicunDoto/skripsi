@extends('layout.soal')

@section('title','Soal')

@section('table-responsive')
      <h4>list soal</h4>
      @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
      @endif
      @if (session('admin'))
          <div class="alert alert-success">
              {{ session('admin') }}
          </div>
      @endif

      <!-- Modal -->
{{-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> --}}
{{-- modal --}}
      <div class="table-responsive">
     <table class="table">
          <thead class="thead-dark">
            <tr>
              <th style="text-align: center;" scope="col">No</th>
              <th style="text-align: center;" scope="col">Soal</th>
              <th style="text-align: center;" scope="col">Kategori</th>
              <th style="text-align: center;" scope="col">Flag</th>
              <th style="text-align: center;" scope="col">Poin</th>
              <th style="text-align: center;" scope="col">Status</th>
              <th style="text-align: center;" scope="col" style="text-align: center;">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($soal as $soals)
            <tr>
              <th style="text-align: center;" scope="row">{{ $loop->iteration}}</th>
              <td style="text-align: center;">{{$soals->nama_soal}}</td>
              <td style="text-align: center;">{{$soals->kategori}}</td>
              <td style="text-align: center;">{{$soals->flag}}</td>
              <td style="text-align: center;">{{$soals->nilai}}</td>
              <td style="text-align: center;">
                @if ($soals->aktif_soal=="aktif")
                  <span class="badge badge-success">Aktif</span>
                @elseif($soals->aktif_soal=="tidak")
                  <span class="badge badge-dark">Tidak Aktif</span>
                @else
                  <span class="badge badge-danger">Error</span>
                @endif
              </td>
              <td style="text-align: center;">
                {{-- <a href="admin/{{ $soals->id_soal }}" class="show-modal badge badge-pill badge-primary" ><span data-feather="book"></span> Detail</a> --}}
                <a href="/admin/{{ $soals->id_soal }}" class="badge badge-pill badge-primary" ><span data-feather="book"></span> Detail</a>
              </td>
            </tr>
            @endforeach
          </tbody>
    </table>
      </div>

@endsection