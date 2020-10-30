<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="<?= base_url('assets') ;?>/sb-admin/utama/css/styles.css" rel="stylesheet" />
        <!-- <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" /> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?= base_url('assets') ;?>/perfect-learn/css/bootstrap.min.css" />
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="<?= base_url('assets') ;?>/perfect-learn/css/pogo-slider.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?= base_url('assets') ;?>/perfect-learn/css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?= base_url('assets') ;?>/perfect-learn/css/responsive.css" />
    <!-- Custom CSS -->
	<link rel="stylesheet" href="<?= base_url('assets') ;?>/perfect-learn/css/custom.css" />
    </head>
    <body class="sb-nav-fixed">
            <?= $this->include('layout/navbar') ;?>
            <div id="layoutSidenav_content" class="container">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Charts</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Charts</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                            Tracer Study merupakan salah satu metode yang digunakan oleh beberapa perguruan tinggi, khususnya di Indonesia untuk memperoleh umpan balik dari alumni. Umpan balik yang diperoleh dari alumni ini dibutuhkan oleh perguruan tinggi dalam usahanya untuk perbaikan serta pengembangan kualitas dan sistem pendidikan. Tak hanya itu, umpan balik inipun dapat bermanfaat untuk memetakan dunia usaha dan industri agar jeda diantara kompetensi yang diperoleh alumni saat kuliah dengan tuntutan dunia kerja dapat diperkecil.
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-area mr-1"></i>
                                Area Chart Example
                            </div>
                            <div class="card-body"><canvas id="myAreaChart" width="100%" height="30"></canvas></div>
                            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-area mr-1"></i>
                                Area Chart Example
                            </div>
                            <div class="card-body"><canvas id="myAreaChart" width="100%" height="30"></canvas></div>
                            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-area mr-1"></i>
                                Area Chart Example
                            </div>
                            <div class="card-body"><canvas id="myAreaChart" width="100%" height="30"></canvas></div>
                            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
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
        <script src="<?= base_url('assets') ;?>/sb-admin/utama/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url('assets') ;?>/sb-admin/utama/assets/demo/chart-area-demo.js"></script>
        <script src="<?= base_url('assets') ;?>/sb-admin/utama/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url('assets') ;?>/sb-admin/utama/assets/demo/datatables-demo.js"></script>
    </body>
</html>