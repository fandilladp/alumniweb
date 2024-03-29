<?= $this->extend('layout/template'); ?>

<?= $this->section('isicontent'); ?>
<?php
$username = [
    'name' => 'username',
    'id' => 'username',
    'value' => null,
    'class' => 'form-control form-control-user'
];
$email = [
    'name' => 'email',
    'type' => 'email',
    'id' => 'email',
    'value' => null,
    'class' => 'form-control form-control-user'
];
$password = [
    'name' => 'password',
    'id' => 'password',
    'class' => 'form-control form-control-user'
];

$repeatPassword = [
    'name' => 'repeatPassword',
    'id' => 'repeatPassword',
    'class' => 'form-control form-control-user'
];

$session = session();
$errors = $session->getFlashdata('errors');
$error = $session->getFlashdata('error');
$message = $session->getFlashdata('message');

?>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                        <div class="card-body">
                            <?= $message ?>
                            <?= $error ?>
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
                            <?= form_open('Auth/register') ?>
                            <div class="form-group">
                                <?= form_label("Username", "username") ?>
                                <?= form_input($username) ?>
                            </div>
                            <div class="form-group">
                                <?= form_label("Email", "email") ?>
                                <?= form_input($email) ?>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <?= form_label("Password", "password") ?>
                                    <?= form_password($password) ?>
                                </div>
                                <div class="col-sm-6">
                                    <?= form_label("Repeat Password", "repeatPassword") ?>
                                    <?= form_password($repeatPassword) ?>
                                </div>
                            </div>
                            <div class="text-right">
                                <?= form_submit('submit', 'Submit', ['class' => 'btn btn-primary btn-user btn-block']) ?>
                            </div>
                            <?= form_close() ?>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?= $this->endSection() ?>