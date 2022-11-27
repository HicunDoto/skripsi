@extends('layout.player')

@section('title','Scoreboard')

@section('table-responsive')

@if ($nilai->isEmpty())
<h4 style="text-align: center">BELUM MEMECAHKAN SOAL</h4>
<center><img style="background-color: transparent;" class="img-fluid" src="../robo.png" width="250" height="250"/></center>
@else
<div class="table-responsive">
  <table class="table">
       <thead class="thead-dark">
         <tr>
           <th style="text-align: center;" scope="col">No</th>
           <th style="text-align: center;" scope="col">Nama Soal</th>
           <th style="text-align: center;" scope="col">Kategori</th>
           <th style="text-align: center;" scope="col">Link Edukasi</th>
           <th style="text-align: center;" scope="col">Status</th>
           <th style="text-align: center;" scope="col">Nilai</th>
         </tr>
       </thead>
       <tbody>
         @foreach ($nilai as $poin)
         <tr>
          <th style="text-align: center;" scope="row">{{ $loop->iteration}}</th>
          <td style="text-align: center;">{{Str::upper($poin->nama_soal)}}</td>
          <td style="text-align: center;">{{Str::upper($poin->kategori)}}</td>
          <td style="text-align: center;"><a target="_blank" class="badge badge-info" href="{{$poin->edukasi}}">{{Str::upper($poin->nama_soal)}}</a></td>
          <td style="text-align: center;"><label class="badge badge-success">{{Str::upper($poin->status)}}</label></td>
          <td style="text-align: center;">{{$poin->nilai}}</td>
        </tr>
         @endforeach
       </tbody>
 </table>
   </div>
   @endif
@endsection