<?= $this->extend('layout/templateform'); ?>
<?= $this->section('isicontent'); ?>

<?php

// $statuskerja = [
//     'name'  => 'statuskerja',
//     'id'    => 'statuskerja',
//     'value' => null,
//     'class' => 'form-control',
// ];
$bidangpekerjaan = [
    'name'  => 'bidangpekerjaan',
    'id'    => 'bidangpekerjaan',
    'value' => null,
    'class' => 'form-control',
];
$jabatan = [
    'name'  => 'jabatan',
    'id'    => 'jabatan',
    'value' => null,
    'class' => 'form-control',
];
$kepuasanprodi = [
    'name'  => 'kepuasanprodi',
    'id'    => 'kepuasanprodi',
    'type'  => 'textarea',
    'value' => null,
    'class' => 'form-control',
];
$kesesuaianilmu = [
    'name'  => 'kesesuaianilmu',
    'id'    => 'kesesuaianilmu',
    'value' => null,
    'class' => 'form-control',
];
$informasipekerjaan = [
    'name'  => 'informasipekerjaan',
    'id'    => 'informasipekerjaan',
    'value' => null,
    'class' => 'form-control',
];
$pencariankerja = [
    'name'  => 'pencariankerja',
    'id'    => 'pencariankerja',
    'value' => null,
    'class' => 'form-control',
];
$hambatan = [
    'name'  => 'hambatan',
    'id'    => 'hambatan',
    'value' => null,
    'class' => 'form-control',
];
$pindahkerja = [
    'name'  => 'pindahkerja',
    'id'    => 'pindahkerja',
    'value' => null,
    'class' => 'form-control',
];
$kemampuanbahasainggris = [
    'name'  => 'kemampuanbahasainggris',
    'id'    => 'kemampuanbahasainggris',
    'value' => null,
    'class' => 'form-control',
];
$kemampuantik = [
    'name'  => 'kemampuantik',
    'id'    => 'kemampuantik',
    'value' => null,
    'class' => 'form-control',
];
$kemampuansoftware = [
    'name'  => 'kemampuansoftware',
    'id'    => 'kemampuansoftware',
    'value' => null,
    'class' => 'form-control',
];
$mensyaratkanipk = [
    'name'  => 'mensyaratkanipk',
    'id'    => 'mensyaratkanipk',
    'value' => null,
    'class' => 'form-control',
];
$manfaatstudiketerampilanteknis = [
    'name'  => 'manfaatstudiketerampilanteknis',
    'id'    => 'manfaatstudiketerampilanteknis',
    'value' => null,
    'class' => 'form-control',
];
$manfaatstudipengetahuanteoritis = [
    'name'  => 'manfaatstudipengetahuanteoritis',
    'id'    => 'manfaatstudipengetahuanteoritis',
    'value' => null,
    'class' => 'form-control',
];
$manfaatstudiprestis = [
    'name'  => 'manfaatstudiprestis',
    'id'    => 'manfaatstudiprestis',
    'value' => null,
    'class' => 'form-control',
];
$manfaatstudikepercayaandiri = [
    'name'  => 'manfaatstudikepercayaandiri',
    'id'    => 'manfaatstudikepercayaandiri',
    'value' => null,
    'class' => 'form-control',
];
$manfaatstudidalampendapatan = [
    'name'  => 'manfaatstudidalampendapatan',
    'id'    => 'manfaatstudidalampendapatan',
    'value' => null,
    'class' => 'form-control',
];
$manfaatstudidalamkarir = [
    'name'  => 'manfaatstudidalamkarir',
    'id'    => 'manfaatstudidalamkarir',
    'value' => null,
    'class' => 'form-control',
];
$manfaatstudidalamlintasbidang = [
    'name'  => 'manfaatstudidalamlintasbidang',
    'id'    => 'manfaatstudidalamlintasbidang',
    'value' => null,
    'class' => 'form-control',
];
$manfaatstudidalammengikutiipteks = [
    'name'  => 'manfaatstudidalammengikutiipteks',
    'id'    => 'manfaatstudidalammengikutiipteks',
    'value' => null,
    'class' => 'form-control',
];
$kebutuhanpengetahuanmahasiswa = [
    'name'  => 'kebutuhanpengetahuanmahasiswa',
    'id'    => 'kebutuhanpengetahuanmahasiswa',
    'value' => null,
    'class' => 'form-control',
];

$submit = [
    'name'  => 'submit',
    'id'    => 'submit',
    'value' => 'Send',
    'class' => 'btn btn-lg btn-outline-primary btn-block btn-login text-uppercase mb-2',
    'type'  => 'submit',
];
$session = session();
$errors = $session->getFlashdata('errors');
?>
<div class="container">
    <?= $this->include('layout/navbar'); ?>
    <div class="jumbotron jumbotron-fluid mt-5" style="background-color: #ffff;">
        <div class="container">
            <p class="lead">Isian pada sesi ini untuk mendapatkan informasi yang tepat dibangun pada sistem informasi student Tracer Center Alumni Teknik Elektro </p>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Kepuasan Lulusan</h3>
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
                            <?= form_open_multipart('angket/kepuasan'); ?>
                            <div class="form-group">
                                <select class="custom-select my-1 mr-sm-2" name="statuskerja">
                                    <option selected>Choose...</option>
                                    <option value="10">Sudah Bekerja</option>
                                    <option value="0">Belum Bekerja</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <?= form_label("Bidang pekerjaan", "bidangpekerjaan") ?>
                                <div class="input-group-append">
                                    <?= form_input($bidangpekerjaan) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <?= form_label("Jabatan terakhir pada pekerjaan", "jabatan") ?>
                                <div class="input-group-append">
                                    <?= form_input($jabatan) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <select class="custom-select my-1 mr-sm-2" name="kepuasanprodi">
                                    <option selected>Rate...</option>
                                    <option value="10">10</option>
                                    <option value="9">9</option>
                                    <option value="8">8</option>
                                    <option value="7">7</option>
                                    <option value="6">6</option>
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                    <option value="0">0</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <?= form_label("Seberapa besar presentase kesesuaian pengetahuan dan keterampilan yang saudara peroleh dari program studi dengan tuntutan pekerjaan pertama saudara ?", "kesesuaianilmu") ?>
                                <div class="input-group-append">
                                    <?= form_input($kesesuaianilmu) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <?= form_label("Dari mana saudara mendapat informasi tentang pekerjaan pertama kali ?", "informasipekerjaan") ?>
                                <div class="input-group-append">
                                    <?= form_input($informasipekerjaan) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <?= form_label("Apakah saudara merasa kesulitan untuk mendapatkan pekerjaan pertama", "pencariankerja") ?>
                                <div class="input-group-append">
                                    <?= form_input($pencariankerja) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <?= form_label("Apa sajakah hambatan saudara untuk mendapatkan pekerjaan pertama ?", "hambatan") ?>
                                <div class="input-group-append">
                                    <?= form_input($hambatan) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <?= form_label("Apakah saudara pernah pindah pekerjaan ?", "pindahkerja") ?>
                                <div class="input-group-append">
                                    <?= form_input($pindahkerja) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <?= form_label("Sejauh mana pekerjaan saudara membutuhkan kemampuan bahasa inggris", "kemampuanbahasainggris") ?>
                                <div class="input-group-append">
                                    <?= form_input($kemampuanbahasainggris) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <?= form_label("Sejauh mana pekerjaan saudara membutuhkan teknologi informasi", "kemampuanttik") ?>
                                <div class="input-group-append">
                                    <?= form_input($kemampuantik) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <?= form_label("Sejauh mana pekerjaan saudara membutuhkan kemampuan dalam implementasi software/hardware ?", "kemampuansofware") ?>
                                <div class="input-group-append">
                                    <?= form_input($kemampuansoftware) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <?= form_label("Apakah instansi di tempat saudara bekerja mensyaratkan IPK ?", "mensyaratkanipk") ?>
                                <div class="input-group-append">
                                    <?= form_input($mensyaratkanipk) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <?= form_label("Berikan penilaian tentang tingkat kebermanfaaatan yang saudara peroleh dari program studi dalam segi 'keterapilan teknis atau praktis'", "manfaatstudiketerampilanteknis") ?>
                                <div class="input-group-append">
                                    <?= form_input($manfaatstudiketerampilanteknis) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <?= form_label("Berikan penilaian tentang tingkat kebermanfaaatan yang saudara peroleh dari program studi dalam segi 'pengetahuan teoritis'", "manfaatstudipengetahuanteoritis") ?>
                                <div class="input-group-append">
                                    <?= form_input($manfaatstudipengetahuanteoritis) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <?= form_label("Berikan penilaian tentang tingkat kebermanfaaatan yang saudara peroleh dari program studi dalam segi 'prestis/kebanggaan yang tinggi'", "manfaatstudiprestis") ?>
                                <div class="input-group-append">
                                    <?= form_input($manfaatstudiprestis) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <?= form_label("Berikan penilaian tentang tingkat kebermanfaaatan yang saudara peroleh dari program studi dalam segi 'kepercayaan diri'", "manfaatstudikepercayaandiri") ?>
                                <div class="input-group-append">
                                    <?= form_input($manfaatstudikepercayaandiri) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <?= form_label("Berikan penilaian tentang tingkat kebermanfaaatan yang saudara peroleh dari program studi dalam segi 'pendapatan yang besar'", "manfaatstudidalampendapatan") ?>
                                <div class="input-group-append">
                                    <?= form_input($manfaatstudidalampendapatan) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <?= form_label("Berikan penilaian tentang tingkat kebermanfaaatan yang saudara peroleh dari program studi dalam segi 'kemajuan karir/promosi yang cepat'", "manfaatstudidalamkarir") ?>
                                <div class="input-group-append">
                                    <?= form_input($manfaatstudidalamkarir) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <?= form_label("Berikan penilaian tentang tingkat kebermanfaaatan yang saudara peroleh dari program studi dalam segi 'kemampuan mobilitas lintas bidang pekerjaan yang tinggi'", "manfaatstudidalamlintasbidang") ?>
                                <div class="input-group-append">
                                    <?= form_input($manfaatstudidalamlintasbidang) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <?= form_label("Apakah pengetahuan dan keterampilan saudara dapatkan di program studi mengikuti perkembangan IPTEKS bidang pendidikan", "manfaatstudidalammengikutiipteks") ?>
                                <div class="input-group-append">
                                    <?= form_input($manfaatstudidalammengikutiipteks) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <?= form_label("Menurut saudara, pengetahuan dan keterampilan apa saja yang relevan dengan kebutuhan dunia kerja yang perlu diberikan Prodi kepada mahasiswa ?", "kebutuhanpengetahuanmahasiswa") ?>
                                <div class="input-group-append">
                                    <?= form_input($kebutuhanpengetahuanmahasiswa) ?>
                                </div>
                            </div>
                            <div class="text-right">
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