@extends('layout.soal')

@section('title','Soal')

@section('table-responsive')
      <h4>list soal</h4>
      @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
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
              <th scope="col">No</th>
              <th scope="col">Soal</th>
              <th scope="col">Kategori</th>
              <th scope="col">Status</th>
              <th scope="col" style="text-align: center;">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($soal as $soals)
            <tr>
              <th scope="row">{{ $loop->iteration}}</th>
              <td>{{$soals->soal}}</td>
              <td>{{$soals->kategori}}</td>
              <td>
                @if ($soals->aktif_soal=="1")
                  <span class="badge badge-success">Aktif</span>
                @elseif($soals->aktif_soal=="0")
                  <span class="badge badge-dark">Tidak Aktif</span>
                @else
                  <span class="badge badge-danger">Error</span>
                @endif
              </td>
              <td style="text-align: center;">
                {{-- <a href="soal/{{ $soals->id }}" class="show-modal badge badge-pill badge-primary" ><span data-feather="book"></span> Detail</a> --}}
                <a href="/soal/{{ $soals->id }}" class="badge badge-pill badge-primary" ><span data-feather="book"></span> Detail</a>
              </td>
            </tr>
            @endforeach
          </tbody>
    </table>
      </div>

@endsection