<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use Form;
use Html;
use Input;
use Redirect;
use View;
use App\TunjanganModel;
use App\TunjanganpegawaiModel;
use App\PegawaiModel;
use App\GolonganModel;
use App\JabatanModel;
use App\User;

class TunjanganPegawaiController extends Controller
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
        $user = User::all();
        $gol = GolonganModel::all();
        $jab = JabatanModel::all();
        $pegawai = PegawaiModel::all();
        $tunpeg = TunjanganpegawaiModel::all();
        return view('Tunjanganpegawai.index', compact('tunpeg', 'pegawai', 'gol', 'jab'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        $pegawai = PegawaiModel::all();
        $tunjangan = TunjanganModel::all();
        return view('Tunjanganpegawai.create', compact('tunjangan', 'pegawai', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tunpeg = Request::all();
        TunjanganpegawaiModel::create($tunpeg);
        return redirect('Tunjanganpegawai');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gol = GolonganModel::all();
        $user = User::all();
        $pegawai = PegawaiModel::all();
        $tunjangan = TunjanganModel::all();
        $tunpeg = TunjanganpegawaiModel::find($id);
        return view('Tunjanganpegawai.show', compact('tunjangan', 'tunpeg', 'pegawai','user', 'gol'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pegawai = PegawaiModel::all();
        $tunjangan = TunjanganModel::all();
        $tunpeg = TunjanganpegawaiModel::find($id);
        return view('Tunjanganpegawai.edit', compact('tunpeg', 'tunjangan', 'pegawai'));
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
        $tunpegUpdate = Request::all();
        $tunpeg = TunjanganpegawaiModel::find($id);
        $tunpeg->update($tunpegUpdate);
        return redirect('Tunjanganpegawai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TunjanganpegawaiModel::find($id)->delete();
        return redirect('Tunjanganpegawai');
    }
}
