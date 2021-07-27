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

    function gunakansket($param)
    {
        Sket::findOrFail($param);

        Sket::where('id', $param)->update([
            'status' => 'sudah digunakan'
        ]);
        return redirect('/bpn/gunakan/sket')->with('berhasil', 'SKET berhasil diterbitkan');
    }
}
