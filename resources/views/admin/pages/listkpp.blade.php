@extends('admin.header.header')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Data Petugas KPP</h1>
    </div>
    <div class="section-body">
        @if($errors->any())
        <div class="alert alert-danger">
            <p>Gagal : </p>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if(Session::has('gagal'))
        <div class="alert alert-danger">
            {{Session::get('gagal')}}
        </div>
        @endif
        @if(Session::has('berhasil'))
        <div class="alert alert-success">
            {{Session::get('berhasil')}}
        </div>
        @endif
        <div class="col-lg-12 mb-3" style="padding-left: 0; padding-right: 0;">
        <button class="btn btn-success" onclick="tambahKpp()"><i class="fas fa-plus mr-1"></i>Tambah Data</button>
        </div>
        <table class="table table-striped tabel">
            <thead>
                <tr style="text-align: center;">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($kpp as $k)
                <tr style="text-align: center;">
                    <td>{{$loop->iteration}}</td>
                    <td>{{$k->name}}</td>
                    <td>{{$k->username}}</td>
                    <td>
                        <button class="btn btn-primary" onclick="editKpp('{{$k->id}}')"><i class="fas fa-pencil-alt"></i> Ubah</button>
                        <button class="btn btn-warning" onclick="editPassKpp('{{$k->id}}')"><i class="fas fa-pencil-alt"></i> Ubah Password</button>
                        <a href="{{ route('hapus.petugas.kpp', ['id' => $k->id]) }}" class="btn btn-danger" onclick="return confirm('Yakin melanjutkan hapus data ? ')"><i class="fas fa-trash"></i> Hapus</a>
                    </td>
                </tr>
                @empty
                <tr style="text-align: center;">
                    <td colspan="4">Tidak Ada Data</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</section>
@endsection