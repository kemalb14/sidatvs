<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petugas_Kpp;
use App\Models\Petugas_Bpn;
use App\Models\Sket;
use Hash;

class AdminController extends Controller
{
    function index()
    {
        $data['sket'] = Sket::all();
        return view('admin.pages.home', $data);
    }

    function listkpp()
    {
        $data['kpp'] = Petugas_Kpp::all();
        $data['keyword'] = "";
        return view('admin.pages.listkpp', $data);
    }

    function listbpn()
    {
        $data['bpn'] = Petugas_Bpn::all();
        $data['keyword'] = "";
        return view('admin.pages.listbpn', $data);
    }

    function findPetugasKpp(Request $req)
    {
        Petugas_Kpp::findOrFail($req->id);
        $data = Petugas_Kpp::where('id', $req->id)->first();
        return response()->json($data);
    }

    function findPetugasBpn(Request $req)
    {
        Petugas_Bpn::findOrFail($req->id);
        $data = Petugas_Bpn::where('id', $req->id)->first();
        return response()->json($data);
    }

    function postPetugasKpp(Request $req)
    {
        $req->validate([
            'nama' => 'required',
            'username' => 'required|unique:petugas_kpp',
            'pass' => 'required|min:7',
        ], [
            'nama.required' => 'Nama harus diisi',
            'username.required' => 'Username harus diisi',
            'username.unique' => 'Username telah digunakan',
            'pass.required' => 'Password harus diisi',
            'pass.min' => 'Password minimal 7 karakter',
        ]);

        try {
            Petugas_Kpp::create([
                'name' => $req->nama,
                'username' => $req->username,
                'password' => Hash::make($req->pass)
            ]);

            return redirect('/admin/kpp')->with('berhasil', 'Data petugas KPP berhasil ditambahkan');
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    function postPetugasBpn(Request $req)
    {
        $req->validate([
            'nama' => 'required',
            'username' => 'required|unique:petugas_bpn',
            'pass' => 'required|min:7',
        ], [
            'nama.required' => 'Nama harus diisi',
            'username.required' => 'Username harus diisi',
            'username.unique' => 'Username telah digunakan',
            'pass.required' => 'Password harus diisi',
            'pass.min' => 'Password minimal 7 karakter',
        ]);

        try {
            Petugas_Bpn::create([
                'name' => $req->nama,
                'username' => $req->username,
                'password' => Hash::make($req->pass)
            ]);

            return redirect('/admin/bpn')->with('berhasil', 'Data petugas BPN berhasil ditambahkan');
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    function ubahPetugasKpp(Request $req)
    {
        $req->validate([
            'nama' => 'required',
            'username' => 'required',
        ],[
            'nama.required' => 'Nama harus diisi',
            'username.required' => 'Username harus diisi'
        ]);

        try {
            Petugas_Kpp::findOrFail($req->id);
            $cek = Petugas_Kpp::where('id', '<>',$req->id)->where('username', $req->username)->first();
            if ($cek) {
                return redirect('/admin/kpp')->with('gagal', 'Username telah digunakan');
            }else{
                Petugas_Kpp::where('id', $req->id)->update([
                    'name' => $req->nama,
                    'username' => $req->username
                ]);
                return redirect('/admin/kpp')->with('berhasil', 'Data petugas KPP berhasil diubah');
            }
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    function ubahPetugasBpn(Request $req)
    {
        $req->validate([
            'nama' => 'required',
            'username' => 'required',
        ],[
            'nama.required' => 'Nama harus diisi',
            'username.required' => 'Username harus diisi'
        ]);

        try {
            Petugas_Bpn::findOrFail($req->id);
            $cek = Petugas_Bpn::where('id', '<>',$req->id)->where('username', $req->username)->first();
            if ($cek) {
                return redirect('/admin/bpn')->with('gagal', 'Username telah digunakan');
            }else{
                Petugas_Bpn::where('id', $req->id)->update([
                    'name' => $req->nama,
                    'username' => $req->username
                ]);
                return redirect('/admin/bpn')->with('berhasil', 'Data petugas BPN berhasil diubah');
            }
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    function ubahPasswordKpp(Request $req)
    {
        $req->validate([
            'pass' => 'required',
        ],[
            'pass.required' => 'Password baru harus diisi'
        ]);

        try {
            Petugas_Kpp::findOrFail($req->id);
            Petugas_Kpp::where('id', $req->id)->update([
                'password' => Hash::make($req->pass)
            ]);
            return redirect('/admin/kpp')->with('berhasil', 'Password petugas KPP berhasil diubah');
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    function ubahPasswordBpn(Request $req)
    {
        $req->validate([
            'pass' => 'required',
        ],[
            'pass.required' => 'Password baru harus diisi'
        ]);

        try {
            Petugas_Bpn::findOrFail($req->id);
            Petugas_Bpn::where('id', $req->id)->update([
                'password' => Hash::make($req->pass)
            ]);
            return redirect('/admin/bpn')->with('berhasil', 'Password petugas BPN berhasil diubah');
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    function hapusPetugasKpp(){
        Petugas_Kpp::findOrFail($_GET['id']);
        try {
            Petugas_Kpp::where('id', $_GET['id'])->delete();
            return redirect('/admin/kpp')->with('berhasil', 'Data petugas KPP berhasil dihapus');
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    function hapusPetugasBpn(){
        Petugas_Bpn::findOrFail($_GET['id']);
        try {
            Petugas_Bpn::where('id', $_GET['id'])->delete();
            return redirect('/admin/bpn')->with('berhasil', 'Data petugas BPN berhasil dihapus');
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}
