<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\Models\User;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ftp()
    {
        //$soal = \App\Models\Soal::all();
        // $soal = DB::table('soal')->get();
        // dd($soal);
        return view('edukasi.ftp');
    }
    public function rce()
    {
        //$soal = \App\Models\Soal::all();
        // $soal = DB::table('soal')->get();
        // dd($soal);
        return view('edukasi.rce');
    }
    public function mysql()
    {
        //$soal = \App\Models\Soal::all();
        // $soal = DB::table('soal')->get();
        // dd($soal);
        return view('edukasi.mysql');
    }
    public function ssh()
    {
        //$soal = \App\Models\Soal::all();
        // $soal = DB::table('soal')->get();
        // dd($soal);
        return view('edukasi.ssh');
    }
    public function rce1()
    {
        //$soal = \App\Models\Soal::all();
        // $soal = DB::table('soal')->get();
        // dd($soal);
        return view('clue.rce');
    }
    public function ssh1()
    {
        //$soal = \App\Models\Soal::all();
        // $soal = DB::table('soal')->get();
        // dd($soal);
        return view('clue.ssh1');
    }
    public function ssh2()
    {
        //$soal = \App\Models\Soal::all();
        // $soal = DB::table('soal')->get();
        // dd($soal);
        return view('clue.ssh2');
    }
    public function mysql1()
    {
        //$soal = \App\Models\Soal::all();
        // $soal = DB::table('soal')->get();
        // dd($soal);
        return view('clue.mysql');
    }
    public function ftp1()
    {
        //$soal = \App\Models\Soal::all();
        // $soal = DB::table('soal')->get();
        // dd($soal);
        return view('clue.ftp');
    }
    public function index()
    {
        $soal = \App\Models\Soal::all();
        // $soal = DB::table('soal')->get();
        // dd($soal);
        return view('dashboard.index',['soal' => $soal]);
    }
    public function soal()
    {
        $var = 'aktif';
        //$soal = DB::table('soals')->join('flag', 'flag.id_soal', '=', 'soals.id_soal')->select('soals.*', 'flag.flag')->where('aktif_soal','LIKE',"%{$var}%")->get();
        $soal = \App\Models\soal::where('aktif_soal','LIKE',"%{$var}%")->get();
        // $soal = DB::table('soal')->get();
        // dd($soal);
        return view('dashboard.soal',['soal' => $soal]);
    }    
    public function scoreboard()
    {
        $var = 'user';
        $var1 = 'benar';
        //$user = User::where('level','LIKE',"%{$var}%")->get();
        //$nilai = DB::table('status')->join('users', 'users.id_user', '=', 'status.id_user')->join('soals', 'soals.id_soal', '=', 'status.id_soal')->select('users.*','soals.*','status.*')->where('users.level','LIKE',"%{$var}%")->get();
        //$nilai = DB::table('status')->join('users', 'users.id_user', '=', 'status.id_user')->join('soals', 'soals.id_soal', '=', 'status.id_soal')->select('users.name','users.email',DB::raw('SUM(soals.nilai) as jumlah'),'status.*')->where('users.id_user',auth()->user()->id_user)->where('status.status','LIKE',"%{$var1}%")->where('users.level','LIKE',"%{$var}%")->groupBy('status.id_user')->get();
        $nilai = DB::table('status')->join('users', 'users.id_user', '=', 'status.id_user')->join('flag', 'flag.id_soal', '=', 'status.id_soal')->join('soals', 'soals.id_soal', '=', 'status.id_soal')->select('users.*','soals.*','status.*','flag.*')->where('users.id_user',auth()->user()->id_user)->where('status.status','LIKE',"%{$var1}%")->where('users.level','LIKE',"%{$var}%")->orderBy('soals.nilai')->get();
        // $soal = DB::table('soal')->get();
        //dd($nilai1);
        //print_r($user);
        return view('dashboard.scoreboard',[
           'nilai' => $nilai
        ]);
    }
    public function submitflag(Request $request,$id)
    {
        $request->validate([
            'flag' => 'required|max:100|min:15',
            ]);
        $var= 'benar';
        $flag= \App\Models\Flag::where('id_soal',$id)->firstOrFail();
        $status = \App\Models\Status::where('id_soal',$id)->where('id_user',auth()->user()->id_user)->first();

        if ($status === null && $request->flag == $flag->flag) {
            $status= \App\Models\Status::create([
                'status' => 'benar',
                'timer' => $request->timer,
                'id_soal' => $flag->id_soal,
                'id_user' => auth()->user()->id_user,
            ]);
            //dd($status);
            return redirect()->to('/dashboard/'.$id)->with('benar', 'Flag Benar!');
        }
        elseif ($request->flag == $flag->flag) {
            //dd($status);
            return redirect()->to('/dashboard/'.$id)->with('benar', 'Flag Sudah Benar!');
        } 
        else {
            //dd($status);
            return redirect()->to('/dashboard/'.$id)->with('salah', 'Flag Salah!');
        }
        
        //return view()
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $soal = \App\Models\Soal::where('id_soal',$id)->firstOrFail();
        $flag= \App\Models\Flag::where('id_soal',$id)->firstOrFail();
        //dd($soal);
       return view('dashboard.detail-soal',['soal' => $soal,'flag' => $flag]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
