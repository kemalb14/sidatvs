<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>SIDATVS</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">

    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="modal fade" id="modalsertif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Sertifikat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('post.sertifikat') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" class="form-control" name="id" id="idsket">
                        <div class="form-group">
                            <label for="">Nomor Sertifikat</label>
                            <input type="text" class="form-control" name="no_sertifikat" placeholder="Masukkan nomor sertifikat" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Terbitkan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <ul class="navbar-nav mr-auto">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                </ul>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="{{ asset('assets/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, {{Auth::guard('bpn')->user()->name}}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ route('logout.bpn') }}" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="{{ route('home.bpn') }}">SIDATVS</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="{{ route('home.bpn') }}">SV</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li><a class="nav-link" href="{{ route('home.bpn') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
                        <li class="menu-header">SKET</li>
                        <li><a class="nav-link" href="{{ route('gunakan.sket') }}"><i class="fas fa-envelope"></i> <span>Terbitkan Sertifikat</span></a></li>
                    </ul>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                @yield('content')
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
                </div>
                <div class="footer-right">
                    2.3.0
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <script>
        var spin = '<div class="spinner-border text-primary" role="status">' +
            '<span class="sr-only">Loading...</span>' +
            '</div>';

        var kosong = '<div class="col-lg-12 alert alert-danger" style="text-align:center">' +
            '<p>Data tidak ditemukan</p>' +
            '</div>';

        $(document).ready(function() {
            $('.tabel').DataTable();
        });

        function cariData() {
            if ($('#keyword').val() == '') {
                alert('Masukkan nomor sket terlebih dahulu');
            } else {
                $('#hasil').html(spin);
                var key = {
                    keyword: $('#keyword').val()
                };
                $.ajax({
                    url: "{{ route('ajax.request.sket') }}",
                    type: "GET",
                    data: key,
                    success: function(json) {
                        if (Object.keys(json).length == 0) {
                            $('#hasil').html(kosong);
                        } else {
                            var ins = '<div class="col-lg-3"></div>' +
                                '<div class="col-lg-6 card" style="padding:10px">' +
                                '<h5 style="text-align:center">Data SKET</h5>' +
                                '<table>' +
                                '<tr>' +
                                '<td>Tanggal</td>' +
                                '<td> : </td>' +
                                '<td>' + json.tanggal + '</td>' +
                                '</tr>' +
                                '<tr>' +
                                '<td>Nama</td>' +
                                '<td> : </td>' +
                                '<td>' + json.nama + '</td>' +
                                '</tr>' +
                                '<tr>' +
                                '<td>NPWP</td>' +
                                '<td> : </td>' +
                                '<td>' + json.npwp + '</td>' +
                                '</tr>' +
                                '<tr>' +
                                '<td>No. Sket</td>' +
                                '<td> : </td>' +
                                '<td>' + json.no_sket + '</td>' +
                                '</tr>' +
                                '<tr>' +
                                '<td>No. Lpad</td>' +
                                '<td> : </td>' +
                                '<td>' + json.no_lpad + '</td>' +
                                '</tr>' +
                                '<tr>' +
                                '<td>Nominal</td>' +
                                '<td> : </td>' +
                                '<td>' + json.nominal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + '</td>' +
                                '</tr>' +
                                '<tr>' +
                                '<td>Status</td>' +
                                '<td> : </td>' +
                                '<td style="text-transform:capitalize">' + json.status + '</td>' +
                                '</tr>' +
                                '</table>' +
                                '<div class="form-group mt-3" style="text-align:center">' +
                                '<button onclick="terbitSertifikat(' + json.id + ')" class="btn btn-primary"><i class="fas fa-pencil-alt"></i> Terbitkan Sertifikat</button>'
                            '</div>' +
                            '</div>' +
                            '<div class="col-lg-3"></div>';
                            $('#hasil').html(ins);
                            console.log(json);
                        }
                    }
                });
            }
        }

        function terbitSertifikat(param) {
            $('#idsket').val(param);
            $('#modalsertif').modal('show');
        }
    </script>

    <!-- Page Specific JS File -->
</body>

</html>