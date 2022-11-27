@extends('layout.edukasi')

@section('title','Clue')

@section('container')
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Clue SSH2</h5>
    <p>Terdapat file <b>backup</b> di dalam mesin, setelah menemukan file nya, kalian bisa mendecode isi backup tersebut <b>base64</b>.</p>
    <p><b>Base64</b> adalah sekelompok skema pengkodean biner-ke-teks yang mewakili data biner dalam format string ASCII dengan menerjemahkan data ke dalam representasi radix-64.</p>
    <p>Kalian bisa menggunakan teknik <b>bruteforce</b> untuk masuk sebagai <b>root</b>.</p>
  </div>
  <div class="table-responsive">
    <table class="table table-striped">
         <thead class="thead-dark">
            <tr>
                <th colspan="2" style="text-align: center;" scope="col">COMMAND LINE LINUX</th>
            </tr>
           <tr>
             <th style="text-align: center;" scope="col">Command</th>
             <th style="text-align: center;" scope="col">Keterangan</th>
           </tr>
         </thead>
         <tbody>
            <tr>
                <td style="text-align: center; color: green;">uname -a</td>
                <td style="text-align: center;">Show system and kernel</td>
            </tr>
            <tr>
                <td style="text-align: center; color: green;">date</td>
                <td style="text-align: center;">Show system date</td>
            </tr>
            <tr>
                <td style="text-align: center; color: green;">whoami</td>
                <td style="text-align: center;">Show your username</td>
            </tr>
            <tr>
                <td style="text-align: center; color: green;">pwd</td>
                <td style="text-align: center;">Show current directory</td>
            </tr>
            <tr>
                <td style="text-align: center; color: green;">mkdir</td>
                <td style="text-align: center;">Make directory</td>
            </tr>
            <tr>
                <td style="text-align: center; color: green;">cd</td>
                <td style="text-align: center;">Change directory to dir</td>
            </tr>
            <tr>
                <td style="text-align: center; color: green;">ls</td>
                <td style="text-align: center;">List files</td>
            </tr>
            <tr>
                <td style="text-align: center; color: green;">cat</td>
                <td style="text-align: center;">View a spesific file</td>
            </tr>
            <tr>
                <td style="text-align: center; color: green;">echo [strings] | base64</td>
                <td style="text-align: center;">Encode plain text to cipher text(base64)</td>
            </tr>
            <tr>
                <td style="text-align: center; color: green;">echo [strings] | base64 -d</td>
                <td style="text-align: center;">Decode cipher text(base64) to plain text</td>
            </tr>
         </tbody>
   </table>
    </div>
    </div>
@endsection