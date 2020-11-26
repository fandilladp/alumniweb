<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard alumni</title>
    <link href="<?= base_url('assets'); ?>/sb-admin/utama/css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">

    <?php
    if ($status == 'on') {


        $namaalumni = [
            'name'  => 'namaalumni',
            'id'    => 'namaalumni',
            'value' => $alumni->namaalumni,
            'class' => 'form-control',
        ];
        $deskripsi = [
            'name'  => 'deskripsi',
            'id'    => 'deskripsi',
            'value' => $alumni->deskripsi,
            'class' => 'form-control',
        ];
        $gambar = [
            'name' => 'gambar',
            'id' => 'gambar',
            'value' => null,
            'class' => 'form-control',
        ];
        $cv = [
            'name' => 'cv',
            'id' => 'cv',
            'value' => null,
            'class' => 'form-control',
        ];
        $upcv = [
            'name' => 'submit',
            'id' => 'submit',
            'value' => 'Save Changes',
            'class' => 'btn btn btn-primary',
            'type' => 'submit',
        ];
        $submit = [
            'name' => 'submit',
            'id' => 'submit',
            'value' => 'Save Changes',
            'class' => 'btn btn btn-primary',
            'type' => 'submit',
        ];
    }
    $session = session();
    $errors = $session->getFlashdata('errors');
    var_dump($errors);
    ?>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Dashboard Alumni</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
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


                    </div>


            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main id="isi">
                <div class="container-fluid">
                    <ol class="breadcrumb mt-2 mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body"><i class="far fa-id-card"></i> Data Diri</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a id="mulai" class="small text-white stretched-link" href="<?= base_url('angket/created'); ?>">Mulai</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card bg-info text-white mb-4">
                                <div class="card-body"><i class="far fa-smile-beam"></i> Kepuasan Lulusan</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a id="angket2" class="small text-white stretched-link" href="<?= base_url('angket/kepuasan'); ?>">Mulai</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body"><i class="fas fa-university"></i> Hubungan Alumni</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a id="angket3" class="small text-white stretched-link" href="<?= base_url('angket/hubunganalumni'); ?>">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if ($status == 'on') : ?>
                        <div class="container mt-2 bg-dark pb-1 rounded">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div id="avatar" class="mt-5 ">
                                        <img src="<?= base_url('uploads/' . $alumni->gambar); ?>" alt="..." class="rounded img-thumbnail shadow">
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <form>
                                        <div class="form-group mt-5 ml-3 pt-5">
                                            <?php if ($errors != null) : ?>
                                                <div class="alert alert-danger" role="alert">
                                                    <h6 class="alert-heading">Terjadi Kesalahan</h6>
                                                    <hr>
                                                    <p class="mb-0">
                                                        <?php
                                                        foreach ($errors as $err) {
                                                            echo $err . '<br>';
                                                        }
                                                        ?>
                                                    </p>
                                                </div>
                                            <?php endif ?>
                                            <input class="form-control" type="text" value="<?= $alumni->namaalumni; ?>" placeholder="Nama">
                                            <textarea class="form-control mt-2" type="text" placeholder="Deksripsikan singkat tentang diri kamu"><?= $alumni->deskripsi; ?>
                                        </textarea>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="text-right p-2">
                                <button data-toggle="modal" data-target="#modalupdate" class="btn-primary rounded"><i class="fas fa-user-edit"></i></button>
                            </div>
                        </div>
                        <div class="container bg-dark pb-3 rounded">
                            <div class="container form-group mt-5 pt-5">
                                <p class="text-primary">CV</p>
                                <embed width="100%" height=500px src="<?= base_url('cv/' . $alumni->cv); ?>" type="">
                            </div>
                            <div class="text-right p-2">
                                <button data-toggle="modal" data-target="#cvupdate" class="btn-primary rounded"><i class="fas fa-user-edit"></i></button>
                            </div>
                        </div>
                    <?php elseif ($status == 'off') : ?>
                        <ol class="breadcrumb mt-2 mb-4">
                            <li class="breadcrumb-item active">Silahkan isi Data diri  terlebih dahulu, Untuk menggunakan fitur fitur selanjutnya</li>
                        </ol>
                    <?php endif; ?>
            </main>


            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2020</div>
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
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets'); ?>/sb-admin/utama/assets/demo/datatables-demo.js"></script>
</body>

</html>

<!-- modal update -->
<?php if ($status == 'on') : ?>
    <div class="modal fade" id="modalupdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Untuk mempermudah orang lain mengenali anda
                    <hr>
                    <?= form_open_multipart('user/update/' . $myuser->id); ?>
                    <div class="form-group">
                        <?= form_label("Nama Lengkap Saudara", "namaalumni") ?>
                        <div class="input-group-append">
                            <?= form_input($namaalumni) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <?= form_label("Deskripsi singkat", "deskripsi") ?>
                        <div class="input-group-append">
                            <?= form_input($deskripsi) ?>
                        </div>
                    </div>
                    <label for="gambar">Foto Profile</label>
                    <?= form_upload($gambar) ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <?= form_submit($submit) ?>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
    <!-- ============= -->
    <div class="modal fade" id="cvupdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update CV</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= form_open_multipart('user/cv/' . $myuser->id); ?>
                    <label for="cv">Resume/CV</label>
                    <?= form_upload($cv) ?>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="submit" data-dismiss="modal">Cancel</button>
                    <?= form_submit($upcv) ?>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>

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
                <a id="delete" class="btn btn-danger" href="<?= base_url('logout'); ?>">logout</a>
            </div>
        </div>
    </div>
</div>