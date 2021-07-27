<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sket;

class KppController extends Controller
{
    function index()
    {
        return view('kpp.pages.home');
    }

    function formsket()
    {
        return view('kpp.pages.formsket');
    }

    function postsket(Request $req)
    {
        $req->validate([
            'nama' => 'required',
            'npwp' => 'required',
            'no_sket' => 'required|unique:sket',
            'penerima' => 'required',
            'tanggal' => 'required',
            'nominal' => 'required'
        ],[
            'nama.required' => 'Nama harus diisi',
            'npwp.required' => 'NPWP harus diisi',
            'no_sket.required' => 'Nomor SKET harus diisi',
            'no_sket.unique' => 'Nomor SKET '.$req->no_sket.' sudah diinputkan',
            'penerima.required' => 'Penerima Hak harus diisi',
            'tanggal.required' => 'Tanggal harus diisi',
            'nominal.required' => 'Nominal harus diisi'
        ]);

        try {
            Sket::create([
                'nama' => $req->nama,
                'npwp' => $req->npwp,
                'no_sket' => $req->no_sket,
                'penerima_hak' => $req->penerima,
                'tanggal' => $req->tanggal,
                'nominal' => $req->nominal,
                'status' => 'belum digunakan'
            ]);
            return redirect('/kpp/form/sket')->with('berhasil', 'Data SKET berhasil ditambahkan');
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    function batalsket(){
        return view('kpp.pages.batalsket');
    }

    function findsket(Request $req)
    {
        $data = Sket::where('no_sket', $req->keyword)->where('status', 'belum digunakan')->first();
        return response()->json($data);
    }

    function postbatalsket($param)
    {
        Sket::findOrFail($param);

        Sket::where('id', $param)->update([
            'status' => 'batal'
        ]);
        return redirect('/kpp/batal/sket')->with('berhasil', 'SKET berhasil dibatalkan');
    }
}
