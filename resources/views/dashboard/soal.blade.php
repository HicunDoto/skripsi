@extends('layout.player')

@section('title','List Soal')

@section('table-responsive')

@if ($soal->isEmpty())
<h4 style="text-align: center">SOAL BELUM TERSEDIA</h4>
<center><img style="background-color: transparent;" class="img-fluid" src="../robo.png" width="250" height="250"/></center>
@else
<h4 style="text-align: center">SILAHKAN MENGERJAKAN</h4>
    <div class="col-12">   
      <center>
      <table>
        <tr>
          @foreach ($soal as $soals)
            <td>
              <div class="card text-center">
                <div class="card-header">
                  Soal {{ $loop->iteration}}
                </div>
                <div class="card-body" style="background-color: #2e2c2d">
                  <h5 style="color: rgb(222, 224, 220)" class="card-title">{{Str::upper($soals->nama_soal)}} - {{Str::upper($soals->kategori)}}</h5>
                  <p style="color: rgb(222, 224, 220)" class="card-text">{{Str::upper($soals->nilai)}}</p>
                  <a href="/dashboard/{{ $soals->id_soal }}" type="button" class="btn btn-outline-info btn-md">Lihat Soal</a>
                </div>
                <div class="card-footer text-muted">
                  HicunDoto
                </div>
              </div>
              
            </td>
          @endforeach
        </tr>
      </table>
  </center>
    </div>
@endif

@endsection