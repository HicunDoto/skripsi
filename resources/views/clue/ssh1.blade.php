@extends('layout.edukasi')

@section('title','Clue')

@section('container')
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Clue SSH1</h5>
    <p>Letak flag berada di <b>/home/doto</b> dengan menggunakan teknik <b>bruteforce</b>, berikut list user & password : <a class="badge badge-pill badge-secondary" target="_blank" href="/clue/ssh1.zip">Klik disini</a></p>
    <p><b>Bruteforce</b> adalah sebuah teknik serangan terhadap sebuah sistem yang menggunakan percobaan terhadap semua kunci yang mungkin dan biasanya menggunakan list.</p>
  </div>
  <div>
  <center><img src="/clue/ssh1.jpg" alt="" width="400" height="200"></center>
  <p><table class="table table-striped">
    <thead>
        <tr>
            <th colspan="2" style="text-align: center;" scope="col">Cara login SSH</th>
        </tr>
        <tr>
            <th style="text-align: center;" scope="col">Nama</th>
            <th style="text-align: center;" scope="col">Keterangan</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="text-align: center;">ssh</td>
            <td style="text-align: center;">service ssh environment</td>
        </tr>
        <tr>
            <td style="text-align: center;">root</td>
            <td style="text-align: center;">username server</td>
        </tr>
        <tr>
            <td style="text-align: center;">192.168.137.109 ([ip address])</td>
            <td style="text-align: center;">alamat ip server</td>
        </tr>
    </tbody>  
    </table></p>
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
         </tbody>
   </table>
    </div>
    </div>
@endsection