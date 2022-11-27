@extends('layout.soal')

@section('title','Scoreboard')

@section('table-responsive')
<center><h2>SCOREBOARD</h2>
@if ($user->isEmpty())
<h4 style="text-align: center">PARA PLAYER BELUM MEMECAHKAN SOAL</h4>
@else
<div style="width: 75%">
  {!! $usersChart->container() !!}
</div></center>
<div class="table-responsive">
  <table class="table">
       <thead class="thead-dark">
         <tr>
           <th style="text-align: center;" scope="col">No</th>
           <th style="text-align: center;" scope="col">Nama</th>
           <th style="text-align: center;" scope="col">Email</th>
           <th style="text-align: center;" scope="col">Nilai</th>
         </tr>
       </thead>
       <tbody>
         @foreach ($user as $users)
         <tr>
          <th style="text-align: center;" scope="row">{{ $loop->iteration}}</th>
          <td style="text-align: center;">{{Str::upper($users->name)}}</td>
          <td style="text-align: center;">{{Str::upper($users->email)}}</td>
         <td style="text-align: center;"><b>{{$users->jumlah}}</b></td>
        </tr>
         @endforeach
       </tbody>
 </table>
   </div>
@endif
@endsection

@push('script')
{!! $usersChart->script() !!}
@endpush
