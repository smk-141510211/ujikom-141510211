<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use Form;
use Html;
use Input;
use Redirect;
use View;
use App\KategoriLemburModel;
use App\GolonganModel;
use App\JabatanModel;

class KategoriLemburController extends Controller
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
        $jab = JabatanModel::all();
        $gol = GolonganModel::all();
        $katlem = KategoriLemburModel::all();
        return view('Kategorilembur.index', compact('katlem', 'gol', 'jab'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gol = GolonganModel::all();
        $jab = JabatanModel::all();
        return view('Kategorilembur.create', compact('gol','jab'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $katlem = Request::all();
        KategoriLemburModel::create($katlem);
        return redirect('Kategorilembur');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $katlem = KategoriLemburModel::find($id);
        return view('Kategorilembur.show', compact('katlem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gol = GolonganModel::all();
        $katlem = KategoriLemburModel::find($id);
        $jab = JabatanModel::all();
        return view('Kategorilembur.edit', compact('katlem', 'jab', 'gol'));
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
         $katlemUpdate = Request::all();
        $katlem = KategoriLemburModel::find($id);
        $katlem->update($katlemUpdate);
        return redirect('Kategorilembur');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        KategoriLemburModel::find($id)->delete();
        return redirect('Kategorilembur');
    }
}
