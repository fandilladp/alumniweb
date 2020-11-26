<?= $this->extend('layout/templateform'); ?>
<?= $this->section('isicontent'); ?>

<?php

$namaalumni = [
    'name'  => 'namaalumni',
    'id'    => 'namaalumni',
    'value' => old('namaalumni'),
    'class' => 'form-control',

];
$nim = [
    'name'  => 'nim',
    'id'    => 'nim',
    'value' => old('nim'),
    'class' => 'form-control',
    'placeholder' => 'NIM saudara'
];
$ipk = [
    'name'  => 'ipk',
    'id'    => 'ipk',
    'value' => old('ipk'),
    'class' => 'form-control',
    'placeholder' => 'contoh 4.00'
];
$mulaistudy = [
    'name'  => 'mulaistudy',
    'id'    => 'mulaistudy',
    'type'  => 'date',
    'value' => old('mulaistudy'),
    'class' => 'form-control',
];
$akhirstudy = [
    'name'  => 'akhirstudy',
    'id'    => 'akhirstudy',
    'type'  => 'date',
    'value' => old('akhirstudy'),
    'class' => 'form-control',
];
$waktutunggu = [
    'name'  => 'waktutunggu',
    'id'    => 'waktutunggu',
    'value' => old('waktutunggu'),
    'class' => 'form-control',
];
$alamat = [
    'name'  => 'alamat',
    'id'    => 'alamat',
    'value' => old('alamat'),
    'class' => 'form-control',
];
$nomorhp = [
    'name'  => 'nomorhp',
    'id'    => 'nomorhp',
    'value' => old('nomorhp'),
    'class' => 'form-control',
];
$pendidikan = [
    'name'  => 'pendidikan',
    'id'    => 'pendidikan',
    'value' => old('pendidikan'),
    'class' => 'form-control',
];
$pekerjaan = [
    'name'  => 'pekerjaan',
    'id'    => 'pekerjaan',
    'value' => old('pekerjaan'),
    'class' => 'form-control',
];
$submit = [
    'name'  => 'submit',
    'id'    => 'submit',
    'value' => 'Send',
    'class' => 'btn btn-lg btn-outline-primary btn-block btn-login text-uppercase mb-2',
    'type'  => 'submit',
];
$save = [
    'name'  => 'save',
    'id'    => 'save',
    'value' => 'Save',
    'class' => 'btn btn-lg btn-outline-warning btn-block btn-login text-uppercase mb-2',
    'type'  => 'submit',
];
$session = session();
$errors = $session->getFlashdata('errors');
?>
<div class="container">
    <?= $this->include('layout/navbar'); ?>
    <div class="jumbotron jumbotron-fluid mt-5" style="background-color: #ffff;">
        <div class="container">
            <p class="lead">Isian DATA PRIBADI yang dijamin kerahasiannya oleh penanggung jawab Student Tracer Center Alumni Teknik Elektro ITERA</p>

            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Pembuatan Manajemen Informasi Alumni Teknik Elektro ITERA</h3>
                        </div>
                        <div class="card-body">
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
                            <?= form_open('Angket/created'); ?>
                            <div class="form-group">
                                <?= form_label("Nama Lengkap Saudara", "namaalumni") ?>
                                <div class="input-group-append">
                                    <?= form_input($namaalumni) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <?= form_label("NIM", "nim") ?>
                                <div class="input-group-append">
                                    <?= form_input($nim) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <?= form_label("Berapakah IPK Saudara pada saat lulus ?", "ipk") ?>
                                <div class="input-group-append">
                                    <?= form_input($ipk) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <?= form_label("Mulai berkuliah di ITERA ?", "mulaistudy") ?>
                                <?= form_input($mulaistudy) ?>
                            </div>
                            <div class="form-group">
                                <?= form_label("Lulus Kuliah di ITERA ?", "akhirstudy") ?>
                                <?= form_input($akhirstudy) ?>
                            </div>
                            <div class="form-group">
                                <?= form_label("Berapa waktu tunggu memperoleh pekerjaan pertama setelah saudara lulus ?", "waktutunggu") ?>
                                <div class="input-group-append">
                                    <?= form_input($waktutunggu) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <?= form_label("Alamat tinggal sekarang", "alamat") ?>
                                <div class="input-group-append">
                                    <?= form_input($alamat) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <?= form_label("Nomor handphone anda", "nomorhp") ?>
                                <div class="input-group-append">
                                    <?= form_input($nomorhp) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <?= form_label("Pendidikan terakhir", "pendidikan") ?>
                                <div class="input-group-append">
                                    <?= form_input($pendidikan) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <?= form_label("Pekerjaan Terakhir", "pekerjaan") ?>
                                <div class="input-group-append">
                                    <?= form_input($pekerjaan) ?>
                                </div>
                            </div>
                            <div class="text-right">
                                <?= form_submit($save) ?>
                                <?= form_submit($submit) ?>
                            </div>
                            <?= form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>