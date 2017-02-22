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
use App\JabatanModel;
use App\GolonganModel;

class TunjanganController extends Controller
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
        $gol = GolonganModel::all();
        $jab = JabatanModel::all();
        $tunjangan = TunjanganModel::all();
        return view('Tunjangan.index', compact('tunjangan', 'gol', 'jab'));
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
        return view('Tunjangan.create', compact('gol','jab'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tunjangan = Request::all();
        TunjanganModel::create($tunjangan);
        return redirect('Tunjangan');
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
        $jab = JabatanModel::all();
        $tunjangan = TunjanganModel::find($id);
        return view('Tunjangan.show', compact('tunjangan', 'gol', 'jab'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jab = JabatanModel::all();
        $gol = GolonganModel::all();
        $tunjangan = TunjanganModel::find($id);
        return view('Tunjangan.edit', compact('tunjangan', 'gol', 'jab'));
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
        $tunjanganUpdate = Request::all();
        $tunjangan = TunjanganModel::find($id);
        $tunjangan->update($tunjanganUpdate);
        return redirect('Tunjangan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TunjanganModel::find($id)->delete();
        return redirect('Tunjangan');
    }
}
