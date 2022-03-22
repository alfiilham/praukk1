<?php

namespace App\Http\Controllers;

use App\Models\Registrasi;
use App\Http\Requests\StoreRegistrasiRequest;
use App\Http\Requests\UpdateRegistrasiRequest;

class RegistrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Registrasi::all();
        return view('Index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inputdata');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRegistrasiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRegistrasiRequest $request)
    {
        Registrasi::insert([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jk' => $request->jk,
            'agama' => $request->agama,
            'asalsmp' => $request->asalsmp,
            'jurusan' => $request->jurusan,
        ]);
        return redirect('registrasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registrasi  $registrasi
     * @return \Illuminate\Http\Response
     */
    public function show(Registrasi $registrasi)
    {
        $datas = Registrasi::where('id',$registrasi->id)->get();
        return view('pdf', compact('datas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registrasi  $registrasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Registrasi $registrasi)
    {
        $data = $registrasi;
        return view('editdata',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRegistrasiRequest  $request
     * @param  \App\Models\Registrasi  $registrasi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRegistrasiRequest $request, Registrasi $registrasi)
    {
        Registrasi::where('id',$registrasi->id)->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jk' => $request->jk,
            'agama' => $request->agama,
            'asalsmp' => $request->asalsmp,
            'jurusan' => $request->jurusan,
        ]);
        return redirect('registrasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registrasi  $registrasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registrasi $registrasi)
    {
        registrasi::destroy($registrasi->id );
        return redirect('registrasi');
    }
    public function cetakpdf(){
        $datas = Registrasi::all();
        return view('pdf', compact('datas'));
    }
}
