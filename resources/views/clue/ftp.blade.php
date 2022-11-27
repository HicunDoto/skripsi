@extends('layout.edukasi')

@section('title','Clue')

@section('container')
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Clue FTP</h5>
    <p>Kalian hanya perlu login menggunakan user dan password pada tabel dibawah, dan ambil lah <b>flag</b> disana dengan menggunakan command <b>get</b>.</p>
    <p>Cara login : <b>ftp [ip server] > <b>ftp 192.168.137.109</b></b></p>
  </div>
  <div class="table-responsive">
    <table class="table table-striped">
         <thead class="thead-dark">
            <tr>
                <th colspan="2" style="text-align: center;" scope="col">USER ANONYMOUS</th>
            </tr>
           <tr>
             <th style="text-align: center;" scope="col">User</th>
           </tr>
         </thead>
         <tbody>
            <tr>
                <td style="text-align: center; color: green;">anonymous</td>
            </tr>
         </tbody>
   </table>
    </div>
    </div>
@endsection