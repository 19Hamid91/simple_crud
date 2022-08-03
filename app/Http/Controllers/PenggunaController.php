<?php

namespace App\Http\Controllers;

use App\pengguna;
use PDF;
use App\Exports\PenggunaExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penggunas = pengguna::get();

        return view('crud.index', compact('penggunas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $penggunas = new pengguna;
        $penggunas->nama = $request->nama;
        $penggunas->alamat = $request->alamat;
        $penggunas->telpon = $request->telpon;
        $penggunas->tgl_lahir = $request->tgl_lahir;
        $penggunas->asal_sekolah = $request->asal_sekolah;
        $penggunas->save();

        return redirect('pengguna');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengguna = pengguna::find($id);
        return view('crud.edit', compact('pengguna'));
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
        $pengguna = pengguna::find($id);
        $pengguna->nama = $request->nama;
        $pengguna->alamat = $request->alamat;
        $pengguna->telpon = $request->telpon;
        $pengguna->tgl_lahir = $request->tgl_lahir;
        $pengguna->asal_sekolah = $request->asal_sekolah;
        $pengguna->update();

        return redirect('pengguna');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengguna = pengguna::find($id);
        $pengguna->delete();

        return redirect('pengguna');
    }

    public function downloadpdf()
    {
        $pengguna = pengguna::all();
        $pdf = PDF::loadView('crud.pdf', ['pengguna' => $pengguna]);

        return $pdf->download('pengguna.pdf');
    }

    public function export_excel()
    {
        return Excel::download(new PenggunaExport, 'pengguna.xlsx');
    }
}
