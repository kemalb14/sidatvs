@extends('bpn.header.header')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Gunakan SKET</h1>
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
        <div class="col-lg-12" style="padding-left: 0; padding-right: 0;">
            <div class="form-group">
                <label for="">No. SKET</label>
                <input type="text" class="form-control" placeholder="Masukkan nomor sket" id="keyword" required>
            </div>
            <div class="form-group" style="text-align: center;">
                <button class="btn btn-success" onclick="cariData()"><i class="fas fa-search"></i> Cari</button>
            </div>
        </div>
        <div class="row" style="margin-left: 0; padding-right: 0; width:100%" id="hasil">
        </div>
    </div>
</section>
@endsection