<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Blank Page &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
</head>

<body>
    <div class="modal fade" id="tambahkpp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Petugas Kpp</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('post.petugas.kpp') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan nama petugas kpp" required />
                        </div>
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Masukkan username" required />
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="pass" placeholder="Masukkan password" required />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="tambahbpn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Petugas BPN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('post.petugas.bpn') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan nama petugas bpn" required />
                        </div>
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Masukkan username" required />
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="pass" placeholder="Masukkan password" required />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Data Petugas Kpp</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('post.ubah.petugas.kpp') }}" method="post">
                    @csrf
                    <input type="hidden" id="editid" name="id">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" id="editnama" class="form-control" name="nama" placeholder="Masukkan nama petugas kpp" required />
                        </div>
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" id="editusername" class="form-control" name="username" placeholder="Masukkan username" required />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modaleditbpn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Data Petugas BPN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('post.ubah.petugas.bpn') }}" method="post">
                    @csrf
                    <input type="hidden" id="editidbpn" name="id">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" id="editnamabpn" class="form-control" name="nama" placeholder="Masukkan nama petugas kpp" required />
                        </div>
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" id="editusernamebpn" class="form-control" name="username" placeholder="Masukkan username" required />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalpass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Password Petugas Kpp</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('post.ubah.pass.kpp') }}" method="post">
                    @csrf
                    <input type="hidden" id="editpassid" name="id">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" id="editpass" class="form-control" name="pass" placeholder="Masukkan password" required />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalpassbpn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Password Petugas Bpn</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('post.ubah.pass.bpn') }}" method="post">
                    @csrf
                    <input type="hidden" id="editpassidbpn" name="id">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" id="editpassbpn" class="form-control" name="pass" placeholder="Masukkan password" required />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
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
                            <div class="d-sm-none d-lg-inline-block">Hi, {{Auth::guard('admin')->user()->name}}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ route('logout.admin') }}" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="{{ route('home.kpp') }}">SIDATVS</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="{{ route('home.kpp') }}">SV</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li><a class="nav-link" href="{{ route('home.admin') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
                        <li class="menu-header">Pengguna</li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i><span>Data User</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ route('list.kpp') }}">Petugas Kpp</a></li>
                                <li><a class="nav-link" href="{{ route('list.bpn') }}">Petugas Bpn</a></li>
                            </ul>
                        </li>
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
        $(document).ready(function() {
            $('.tabel').DataTable();
        });

        function tambahKpp() {
            $('#tambahkpp').modal('show');
        }

        function editKpp(param) {
            var kpp = {
                'id': param
            };
            $.ajax({
                url: "{{ route('ajax.request.petugas.kpp') }}",
                type: "GET",
                data: kpp,
                success: function(json) {
                    if (json == null) {
                        return;
                    }
                    $('#editid').val(json.id);
                    $('#editnama').val(json.name);
                    $('#editusername').val(json.username);
                    $('#modaledit').modal('show');
                }
            });
        }

        function editPassKpp(param) {
            var kpp = {
                'id': param
            };
            $.ajax({
                url: "{{ route('ajax.request.petugas.kpp') }}",
                type: "GET",
                data: kpp,
                success: function(json) {
                    if (json == null) {
                        return;
                    }
                    console.log(json);
                    $('#editpassid').val(json.id);
                    $('#editpass').val(json.password);
                    $('#modalpass').modal('show');
                }
            });
        }

        function tambahBpn() {
            $('#tambahbpn').modal('show');
        }

        function editBpn(param) {
            var bpn = {
                'id': param
            };
            $.ajax({
                url: "{{ route('ajax.request.petugas.bpn') }}",
                type: "GET",
                data: bpn,
                success: function(json) {
                    if (json == null) {
                        return;
                    }
                    $('#editidbpn').val(json.id);
                    $('#editnamabpn').val(json.name);
                    $('#editusernamebpn').val(json.username);
                    $('#modaleditbpn').modal('show');
                }
            });
        }

        function editPassBpn(param) {
            var bpn = {
                'id': param
            };
            $.ajax({
                url: "{{ route('ajax.request.petugas.bpn') }}",
                type: "GET",
                data: bpn,
                success: function(json) {
                    if (json == null) {
                        return;
                    }
                    console.log(json);
                    $('#editpassidbpn').val(json.id);
                    $('#editpassbpn').val(json.password);
                    $('#modalpassbpn').modal('show');
                }
            });
        }
    </script>

    <!-- Page Specific JS File -->
</body>

</html>