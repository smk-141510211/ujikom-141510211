<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use Form;
use Html;
use Input;
use Redirect;
use View;
use App\LemburPegawaiModel;
use App\PegawaiModel;
use App\KategoriLemburModel;
use App\User;

class LemburPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('Admin');
    }
    public function index()
    {
        $user = User::all();
        $katlem = KategoriLemburModel::all();
        $pegawai = PegawaiModel::all();
        $lembur = LemburPegawaiModel::all();
        return view('Lemburpegawai.index', compact('lembur', 'pegawai', 'katlem', 'user'));
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
        $katlem = KategoriLemburModel::all();
        return view('Lemburpegawai.create', compact('katlem','pegawai', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lembur = Request::all();
        LemburPegawaiModel::create($lembur);
        return redirect('Lemburpegawai');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $katlem = KategoriLemburModel::all();
        $user = User::all();
        $lembur = LemburPegawaiModel::find($id);
        return view('Lemburpegawai.show', compact('lembur', 'user','katlem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::all();
        $pegawai = PegawaiModel::all();
        $katlem = KategoriLemburModel::all();
        $lembur = LemburPegawaiModel::find($id);
        return view('Lemburpegawai.edit', compact('katlem', 'lembur', 'pegawai', 'user'));
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
         $lemburUpdate = Request::all();
        $lembur = LemburPegawaiModel::find($id);
        $lembur->update($lemburUpdate);
        return redirect('Lemburpegawai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        LemburPegawaiModel::find($id)->delete();
        return redirect('Lemburpegawai');
    }
}
