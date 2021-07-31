<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sket;

class BpnController extends Controller
{
    function index()
    {
        return view('bpn.pages.home');
    }

    function formsket()
    {
        return view('bpn.pages.gunakansket');
    }

    function findsket(Request $req)
    {
        $data = Sket::where('no_sket', $req->keyword)->where('status', 'belum digunakan')->where('status', '<>', 'batal')->first();
        return response()->json($data);
    }

    function postsertifikat(Request $req)
    {
        Sket::findOrFail($req->id);

        $req->validate([
            'no_sertifikat' => 'required|unique:sket',
        ],[
            'no_sertifikat.required' => 'Nomor sertifikat harus diisi',
            'no_sertifikat.unique' => 'Nomor sertifikat sudah digunakan'
        ]);

        Sket::where('id', $req->id)->update([
            'status' => 'sudah digunakan',
            'no_sertifikat' => $req->no_sertifikat
        ]);
        return redirect('/bpn/gunakan/sket')->with('berhasil', 'SKET berhasil diterbitkan');
    }
}
