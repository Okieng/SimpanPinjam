<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriPinjaman;

class KategoriPinjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = KategoriPinjaman::all();

        return view ('kategoripinjaman.index',compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = KategoriPinjaman::all();

        return view('kategoripinjaman.create',compact('kategori'));
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
        'nama_pinjaman' => 'required',

    ]);
        $kategori = new KategoriPinjaman;
        $kategori->nama_pinjaman = $request->nama_pinjaman;

        
        $kategori->save();
        return redirect('/kategoripinjaman');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori = KategoriPinjaman::find($id);

        return view('kategoripinjaman.detail',compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = KategoriPinjaman::find($id);

        return view('kategoripinjaman.edit',compact('kategori'));
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
        'nama_pinjaman' => 'required',

    ]);
        $kategori = KategoriPinjaman::find($id);
        $kategori->nama_pinjaman = $request->nama_pinjaman;

        
        $kategori->save();
        return redirect('/kategoripinjaman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = KategoriPinjaman::find($id);
        $delete->delete();
        return redirect('kategoripinjaman');
    }
    
}
