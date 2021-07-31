@extends('kpp.header.header')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Input SKET</h1>
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
            <h5>Upload File Excel</h5>
            <a href="{{ route('download.template') }}" class="btn btn-success float-right">Download Template</a>
            <form action="{{ route('import.excel') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">File : </label>
                    <input type="file" name="sket">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </form>
        </div>
        <hr>
        <div class="col-lg-12 mb-3" style="padding-left: 0; padding-right: 0;">
            <h5>Form SKET</h5>
            <form action="{{ route('post.sket') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Masukkan nama" required>
                </div>
                <div class="form-group">
                    <label for="">NPWP</label>
                    <input type="text" class="form-control" placeholder="Masukkan nomor NPWP" name="npwp" required>
                </div>
                <div class="form-group">
                    <label for="">Nomor SKET</label>
                    <input type="text" class="form-control" placeholder="Masukkan nomor sket" name="no_sket" required>
                </div>
                <div class="form-group">
                    <label for="">Penerima Hak</label>
                    <input type="text" class="form-control" placeholder="Masukkan nama penerima" name="penerima" required>
                </div>
                <div class="form-group">
                    <label for="">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" required>
                </div>
                <div class="form-group">
                    <label for="">Nominal</label>
                    <input type="number" class="form-control" min="0" placeholder="Masukkan nominal" name="nominal" required>
                </div>
                <div class="form-group" style="text-align: center;">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection