<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $soal = \App\Models\soal::all();
        // $soal = DB::table('soal')->get();
        // dd($soal);
        return view('soal.index',['soal' => $soal]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('soal.input-soal',['soal' => \App\Models\soal::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
        'soal' => 'required|max:20',
        'keterangan' => 'required|max:255',
        'kategori' => 'required',
        'aktif_soal' => 'required',
        ]);
        \App\Models\soal::create($request->all());
        return redirect('/soal')->with('status', 'Soal berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $soal = \App\Models\soal::findOrFail($id);
        // dd($soal);
        return view('soal.detail-soal',['soal' => $soal]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $soal = \App\Models\soal::findOrFail($id);
        return view('soal.edit',['soal' => $soal]);
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
        $request->validate([
        'soal' => 'required|max:20',
        'keterangan' => 'required|max:255',
        'kategori' => 'required',
        'aktif_soal' => 'required',
        ]);
        $soal = \App\Models\soal::where('id',$id)
                                ->update([
                                    'soal' => $request->soal,
                                    'keterangan' => $request->keterangan,
                                    'kategori' => $request->kategori,
                                    'aktif_soal' => $request->aktif_soal,
                                ]);
    return redirect('/soal')->with('status', 'Soal berhasil dirubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $soal = \App\Models\soal::destroy($id);
        return redirect('/soal')->with('status', 'Soal berhasil dihapus!');;
    }
}
