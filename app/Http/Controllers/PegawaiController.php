<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use App\PegawaiModel;
use App\JabatanModel;
use App\GolonganModel;
use Input;
use File;


use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;


class PegawaiController extends Controller
{
    use RegistersUsers;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('HRD');
    }
    
    public function index()
    {
       
        $pegawai = PegawaiModel::all();
        return view('Pegawai.index', compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        $gol = GolonganModel::all();
        $jab = JabatanModel::all();
        return view('Pegawai.create', compact('user','gol','jab'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->Validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'permission' => 'required|max:255',
            'Nip'=>'required|numeric|min:3|unique:pegawais,Nip',

            ]);

        $user = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password')),
            'permission' => $request->get('permission'),
            
            ]);


            $pegawai = new PegawaiModel;
            $pegawai->Nip = $request->get('Nip');
            $pegawai->User_id = $user->id;
            $pegawai->Jabatan_id = $request->get('Jabatan_id');
            $pegawai->Golongan_id = $request->get('Golongan_id');

        if ($request->hasFile('Photo')){
            
            $uploadSucces = $request->file('Photo');
            $extension = $uploadSucces->getClientOriginalExtension();
            $filename = md5(time()).'.'.$extension;
            $destinationPath = public_path().DIRECTORY_SEPARATOR.'/assets/image/';
            $uploadSucces->move($destinationPath, $filename);
            
            $pegawai->Photo = $filename;
            $pegawai->save(); 
        }
        

        return redirect('Pegawai');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $pegawai = PegawaiModel::find($id);
         $gol = GolonganModel::all();
         $jab = JabatanModel::all();
         $user = User::all();
        return view('Pegawai.show', compact('pegawai', 'gol', 'jab', 'user'));
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
        $jab = JabatanModel::all();
        $pegawai = PegawaiModel::find($id);
        return view('Pegawai.edit', compact('pegawai', 'jab', 'gol'));
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
         $this->Validate($request, [
            'name' => 'max:255',
            'email' => 'email|max:255|unique:users',
            'password' => 'min:6|confirmed',
            'permission' => 'max:255',
            'Nip'=>'numeric|min:3',
            ]);

        $pegawai = PegawaiModel::where('id', $id)->first();
        $pegawai->Nip = $request['Nip'];
        $pegawai->Jabatan_id = $request['Jabatan_id'];
        $pegawai->Golongan_id = $request['Golongan_id'];


        if($request->file('Photo') == "")
        {
            $pegawai->Photo = $pegawai->Photo;
        } 
        else
        {
            $file = $request->file('Photo');
            $fileName = $file->getClientOriginalName();
            $request->file('Photo')->move("assets/image/", $fileName);
            $pegawai->Photo = $fileName;
        }
        
        $pegawai->update();
        return redirect()->to('Pegawai');
           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PegawaiModel::find($id)->delete();
        return redirect('Pegawai');
    }
}
