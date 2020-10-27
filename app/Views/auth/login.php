<?= $this->extend('layout/template'); ?>

<?= $this->section('isicontent'); ?>
<?php
$username = [
    'name' => 'username',
    'id' => 'username',
    'value' => null,
    'class' => 'form-control form-control-user'
];

$password = [
    'name' => 'password',
    'id' => 'password',
    'class' => 'form-control form-control-user'
];

$session = session();
$errors = $session->getFlashdata('errors');
$message = $session->getFlashdata('message');
?>

<body class="bg-gradient-primary">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                        <div class="card-body">
                                    <?= $message ?>
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
                                    <?= form_open('Auth/login') ?>
                                    <div class="form-group">
                                        <?= form_label("Username", "username") ?>
                                        <?= form_input($username) ?>
                                    </div>
                                    <div class="form-group">
                                        <?= form_label("Password", "password") ?>
                                        <?= form_password($password) ?>
                                    </div>
                                    <div class="text-right">
                                        <?= form_submit('submit', 'Login', ['class' => 'btn btn-primary btn-user btn-block']) ?>
                                    </div>
                                    <?= form_close() ?>
                                    <hr />
                                    <div class="text-center">
                                        <a class="small" href="forgot-password">Forgot Password?</a>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="<?= base_url('auth/register') ;?>">Need an account? Sign up!</a></div>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= $this->endSection() ?>