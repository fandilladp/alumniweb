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
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">Dashboard Alumni</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Activity Log</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="login.html">Logout</a>
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
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>

                    <div class="container row bg-dark m-auto p-3">
                        <div class="card-deck row">
                            <div class="card col-4">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                            <div class="card col-4">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                            <div class="card col-4">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-2 bg-dark pb-1">
                        <div class="container row">
                            <div class="col-4">
                                <div class="mt-5">
                                    <img src="https://img.icons8.com/pastel-glyph/2x/person-male.png" alt="..." class="rounded-circle img-thumbnail">
                                </div>
                            </div>
                            <div class="col-8">
                                <form> 
                                    <div class="form-group mt-5 ml-3 pt-5">
                                        <input class="form-control" type="text" placeholder="Nama Lengkap">
                                        <textarea class="form-control mt-2" type="text" placeholder="Deskripsi"></textarea>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <div class="form-group mt-5 ml-3 pt-5">
                            <form>
                                <div class="form-group p-3">
                                    <label class="warnaputihtext" for="exampleFormControlFile1">
                                        <h3>Upload CV</h3>
                                    </label>
                                    <input type="file" class="form-control" id="exampleFormControlFile1">
                                </div>
                            </form>
                        </div>
                        <div class="text-center">
                            <button class="btn-primary"><i class="fa fa-check-square" aria-hidden="true"></i>
                                Save
                            </button>
                        </div>
                    </div>
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