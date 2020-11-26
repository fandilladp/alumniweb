<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard Admin</title>
    <link href="<?= base_url('assets'); ?>/sb-admin/utama/css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Dashboard Admin</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-users-cog"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <div class="dropdown-divider"></div>
                    <table class="table table-responsive table-hover table-dark">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Created</th>
                                <th scope="col">Aktivasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($aktivasi as $data) : ?>
                                <tr>
                                    <th scope="row">1</th>
                                    <td><?= $data->username; ?></td>
                                    <td><?= $data->NIM; ?></td>
                                    <td><?= $data->created_at; ?></td>
                                    <td>
                                        <a class="btn btn-danger" href="" data-toggle="modal" data-whatever="<?= base_url('user/aktivasi/' . $data->id) ?>" data-target="#add"> <i class="fas fa-user-plus"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" data-toggle="modal" data-target="#logout" href="">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="<?= base_url('home'); ?>">
                            <div class="sb-nav-link-icon">

                                <i class="fa fa-home" aria-hidden="true"></i>
                            </div>
                            Home
                        </a>

                        <a class="nav-link" href="#isi">
                            <div class="sb-nav-link-icon">

                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                            Dashboard
                        </a>


                        <a class="nav-link" href="<?= base_url('lowongan'); ?>">
                            <div class="sb-nav-link-icon">

                                <i class="fa fa-briefcase" aria-hidden="true"></i>
                            </div>
                            Lowongan
                        </a>


                        <a class="nav-link" href="<?= base_url('pelatihan'); ?>">
                            <div class="sb-nav-link-icon">
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                            </div>
                            Pelatihan
                        </a>


                        <a class="nav-link" href="<?= base_url('perusahaan'); ?>">
                            <div class="sb-nav-link-icon">
                                <i class="fa fa-building" aria-hidden="true"></i>
                            </div>
                            Perusahaan
                        </a>
                        <!-- <div class="sb-sidenav-menu-heading">Addons</div>
                        <a class="nav-link" href="charts.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Charts
                        </a>
                        <a class="nav-link" href="tables.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tables
                        </a> -->
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Halaman Khusus Admin</div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <ol class="breadcrumb mt-4 mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-user mr-1"></i>
                                    Terjalinnya hubungan alumni dengan prodi
                                </div>
                                <div class="card-body"><canvas id="hubungandenganprodi" width="100%" height="50"></canvas></div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-bar mr-1"></i>
                                    Alumni Teknik Elektro yang sudah bekerja
                                </div>
                                <div class="card-body"><canvas id="statusbekerja" width="100%" height="50"></canvas></div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="far fa-thumbs-up"></i> Kepuasan Alumni Terhadap Program Studi
                                </div>
                                <div class="card-body"><canvas id="kepuasanprodi" width="100%" height="50"></canvas></div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-briefcase"></i> Bidang Pekerjaan Alumni
                                </div>
                                <div class="card-body"><canvas id="bidangkerja" width="100%" height="50"></canvas>
                                    <button data-toggle="modal" data-target="#bidang" class="btn-primary rounded"><i class="fas fa-marker"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="card w-100 mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Data Alumni Teknik Elektro
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>NIM</th>
                                                <th>Bekerja di</th>
                                                <th>Jabatan</th>
                                                <th>Alamat</th>
                                                <th>Kontak</th>
                                                <th>Hapus</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>NIM</th>
                                                <th>Bekerja di</th>
                                                <th>Jabatan</th>
                                                <th>Alamat</th>
                                                <th>Kontak</th>
                                                <th>Hapus</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php foreach ($all as $dataalumni) : ?>
                                                <tr>
                                                    <td><?= $dataalumni->namaalumni; ?></td>
                                                    <td><?= $dataalumni->nim; ?></td>
                                                    <td><?= $dataalumni->pekerjaan; ?></td>
                                                    <td><?= $dataalumni->jabatan; ?></td>
                                                    <td><?= $dataalumni->alamat; ?></td>
                                                    <td><?= $dataalumni->nomorhp; ?></td>
                                                    <td><a class="btn btn-outline-danger" href="" data-toggle="modal" data-whatever="<?= base_url('user/delete/' . $dataalumni->id) ?>" data-target="#deleteModal"><i class="fas fa-trash-alt"></i></a></td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </main>
            <!-- modal delete -->
            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to delete?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Delete" below if you are ready to delete project.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a id="delete" class="btn btn-danger" href="">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal -->
            <!-- modal add -->
            <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Aktivasi User</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Pilih "Aktivasi" jika ingin mengeaktivasi user ini menjadi alumni.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a id="add" class="btn btn-danger" href="">Aktivasi</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal -->
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Alumni Elektro</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets'); ?>/sb-admin/utama/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets'); ?>/sb-admin/utama/assets/demo/chart-area-demo.js"></script>
    <script src="<?= base_url('assets'); ?>/sb-admin/utama/assets/demo/chart-bar-demo.js"></script>
    <script src="<?= base_url('assets'); ?>/sb-admin/utama/assets/demo/chart-pie-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets'); ?>/sb-admin/utama/assets/demo/datatables-demo.js"></script>
    <script>
        $('#deleteModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('#delete').attr('href', recipient)

        })
        $('#add').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('#add').attr('href', recipient)

        })
    </script>
</body>

</html>
<!-- modal bidang -->
<div class="modal fade" id="bidang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Pie Chart</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= form_open('User/updatetracer'); ?>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <button type="button" class="btn btn-outline-secondary">Dosen</button>
                    </div>
                    <input type="text" name="dosen" class="form-control" aria-label="">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <button type="button" class="btn btn-outline-secondary">Software Developer</button>
                    </div>
                    <input type="text" name="softwaredeveloper" class="form-control" aria-label="">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <button type="button" class="btn btn-outline-secondary">Freelance</button>
                    </div>
                    <input type="text" name="freelance" class="form-control" aria-label="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Data</button>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>

<!-- Logout Modal-->
<div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Logut?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to Logout.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a id="logout" class="btn btn-danger" href="<?= base_url('logout'); ?>">logout</a>
            </div>
        </div>
    </div>
</div>