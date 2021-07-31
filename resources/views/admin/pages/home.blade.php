@extends('admin.header.header')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Dashboard</h1>
    </div>
    <div class="section-body">
        <table class="table table-striped tabel">
            <thead>
                <tr style="text-align: center;">
                    <th>No</th>
                    <th>Nama</th>
                    <th>NPWP</th>
                    <th>No. SKET</th>
                    <th>Penerima Hak</th>
                    <th>Tanggal</th>
                    <th>Nominal</th>
                    <th>Status</th>
                    <th>No. Sertifikat</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sket as $s)
                <tr style="text-align: center;">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $s->nama }}</td>
                    <td>{{ $s->npwp }}</td>
                    <td>{{ $s->no_sket }}</td>
                    <td>{{ $s->penerima_hak }}</td>
                    <td>{{ $s->tanggal }}</td>
                    <td>{{ $s->nominal }}</td>
                    <td>{{ $s->status }}</td>
                    <td>{{ $s->no_sertifikat }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection