<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Simpanan;

class SimpananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $simpanan = Simpanan::all();
        return view('simpanan.index',compact('simpanan'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $simpanan = Simpanan::all();

        return view('simpanan.create',compact('simpanan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'nm_simpanan' => 'required',
        'anggota_id' => 'required',
        'tgl_simpanan' => 'required',
        'besar_simpanan' => 'required',
        'ket' => 'required',

    ]);
        $simpanan = new Simpanan;
        $simpanan->nm_simpanan = $request->nm_simpanan;
        $simpanan->anggota_id = $request->anggota_id;
        $simpanan->tgl_simpanan = $request->tgl_simpanan;
        $simpanan->besar_simpanan = $request->besar_simpanan;
        $simpanan->ket = $request->ket;
        
        $simpanan->save();
        return redirect('/simpanan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $simpanan = Simpanan::find($id);

        return view('simpanan.detail',compact('simpanan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $simpanan = Simpanan::find($id);

        return view('simpanan.edit',compact('simpanan'));
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
        
        $this->validate($request, [
        'nm_simpanan' => 'required',
        'anggota_id' => 'required',
        'tgl_simpanan' => 'required',
        'besar_simpanan' => 'required',
        'ket' => 'required',

    ]);
        $simpanan = Simpanan::find($id);
        $simpanan->nm_simpanan = $request->nm_simpanan;
        $simpanan->anggota_id = $request->anggota_id;
        $simpanan->tgl_simpanan = $request->tgl_simpanan;
        $simpanan->besar_simpanan = $request->besar_simpanan;
        $simpanan->ket = $request->ket;
        
        $simpanan->save();
        return redirect('/simpanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Simpanan::find($id);
        $delete->delete();
        return redirect('simpanan');
    }
}
