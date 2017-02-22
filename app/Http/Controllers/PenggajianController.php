<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use Form;
use Html;
use Input;
use Redirect;
use View;
use App\TunjanganPegawaiModel;
use App\TunjanganModel;
use App\PenggajianModel;
use App\PegawaiModel;



class PenggajianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('Bendahara');
    }

    public function index()
    {
        $pegawai = PegawaiModel::all();
        $tunpeg = TunjanganPegawaiModel::all();
        $penggajian = PenggajianModel::all();
        return view('Penggajian.index', compact('penggajian', 'tunpeg', 'pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   

        $tunjangan = TunjanganModel::all();
        $pegawai = PegawaiModel::all();
        $tunpeg = TunjanganPegawaiModel::all();
        return view('Penggajian.create', compact('tunpeg', 'pegawai',
           'tunjangan' ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $penggajian = Request::all();
        PenggajianModel::create($penggajian);
        return redirect('Penggajian');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tunpeg = TunjanganPegawaiModel::all();
        $penggajian = PenggajianModel::find($id);
        return view('Penggajian.show', compact('tunpeg', 'penggajian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tunpeg = TunjanganPegawaiModel::all();
        $penggajian = PenggajianModel::find($id);
        return view('Penggajian.edit', compact('penggajian', 'tunpeg'));
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
        $penggajianUpdate = Request::all();
        $penggajian = PenggajianModel::find($id);
        $penggajian->update($penggajianUpdate);
        return redirect('Penggajian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PenggajianModel::find($id)->delete();
        return redirect('Penggajian');
    }
}
