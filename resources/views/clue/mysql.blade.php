@extends('layout.edukasi')

@section('title','Clue')

@section('container')
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Clue MYSQL</h5>
    <p>Kamu bisa menggunakan teknik <b>bruteforce</b> untuk loginnya & Letak flag berada di sebuah table.</p>
    <p>Berikut list user & password : <a class="badge badge-pill badge-secondary" target="_blank" href="/clue/mysql.zip">Klik disini</a></p>
  </div>
  <div class="table-responsive">
    <table class="table table-striped">
         <thead class="thead-dark">
            <tr>
                <th colspan="2" style="text-align: center;" scope="col">COMMAND LINE MYSQL</th>
            </tr>
           <tr>
             <th style="text-align: center;" scope="col">Command</th>
             <th style="text-align: center;" scope="col">Keterangan</th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <td style="text-align: center; color: green;">mysql <b>-u</b> root <b>-h</b> 192.168.137.109 <b>-p</b></td>
             <td style="text-align: center;">-u = username in mysql<br>-h = host ip server<br>-p = password user in mysql</td>
           </tr>
            <tr>
                <td style="text-align: center; color: green;">show databases;</td>
                <td style="text-align: center;">Show all databases</td>
            </tr>
            <tr>
                <td style="text-align: center; color: green;">use database;</td>
                <td style="text-align: center;">Select database</td>
            </tr>
            <tr>
                <td style="text-align: center; color: green;">show tables;</td>
                <td style="text-align: center;">Show all tables</td>
            </tr>
            <tr>
                <td style="text-align: center; color: green;">SELECT * FROM table;</td>
                <td style="text-align: center;">Selecting records</td>
            </tr>
         </tbody>
   </table>
    </div>
    </div>
@endsection