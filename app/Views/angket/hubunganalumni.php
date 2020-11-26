<?= $this->extend('layout/templateform') ;?>
<?= $this->section('isicontent') ;?>

 <?php

    $hubungandenganprodi = [
        'name'  => 'hubungandenganprodi',
        'id'    => 'hubungandenganprodi',
        'value' => null,
        'class' => 'form-control',
    ];
    $bagaimanahubunganterjalin = [
        'name'  => 'bagaimanahubunganterjalin',
        'id'    => 'bagaimanahubunganterjalin',
        'value' => null,
        'class' => 'form-control',
    ];
    $komunikasidalamrangka = [
        'name'  => 'komunikasidalamrangka',
        'id'    => 'komunikasidalamrangka',
        'value' => null,
        'class' => 'form-control',
    ];
    $dibuatkansistemalumni = [
        'name'  => 'dibuatkansistemalumni',
        'id'    => 'dibuatkansistemalumni',
        'type'  => 'textarea',
        'value' => null,
        'class' => 'form-control',
    ];
    $pelatihan = [
        'name'  => 'pelatihan',
        'id'    => 'pelatihan',
        'value' => null,
        'class' => 'form-control',
    ];
    $saransistemalumni = [
        'name'  => 'saransistemalumni',
        'id'    => 'saransistemalumni',
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
                <p class="lead">Isian ini menjelaskan hubungan alumni dengan prodi</p>
            
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0 rounded-lg">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Hubungan alumni dengan program studi</h3></div>
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
                                <?= form_open('angket/hubunganalumni'); ?>
                                <div class="form-group">
                                <select class="custom-select my-1 mr-sm-2" name="hubungandenganprodi">
                                    <option selected>Pilih...</option>
                                    <option value="10">Hubungan Terjalin</option>
                                    <option value="0">Hubungan Tidak terjalin</option>

                                </select>
                                </div>
                                <div class="form-group">
                                    <?= form_label("Bagaimana hubungan saudara dengan program studi terus terjalin ?", "bagaimanahubunganterjalin") ?>
                                    <div class="input-group-append">
                                        <?= form_input($bagaimanahubunganterjalin) ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <?= form_label("Dalam rangka apa saudara berkomunikasi dengan program studi", "komunikasidalamrangka") ?>
                                    <div class="input-group-append">
                                        <?= form_input($komunikasidalamrangka) ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <?= form_label("Dosen prodi berniat memperbaiki sistem alumni dengan membuatkan manajemen sistem informasi dengan tujuan agar jalinan hubungan prodi dan alumni selalu baik, apakah saudara setuju ?", "dibuatkansistemalumni") ?>
                                    <?= form_input($dibuatkansistemalumni) ?>
                                </div>
                                <div class="form-group">
                                    <?= form_label("terkait pertanyaan sebelumnya, setelah yudisium akan diberikan pembekalan prodi kepada para alumni untuk mendapatkan sosialisasi terhadap dunia kerja (tips and trick kiatmengikuti persaingan dunia kerja). Apakah saudara setuju", "pelatihan") ?>
                                    <div class="input-group-append">
                                        <?= form_input($pelatihan) ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <?= form_label("Silahkan isi saran kepada prodi dalam membangun sistem manajemen informasi alumni Teknik Elektro ITERA", "saransistemalumni") ?>
                                    <div class="input-group-append">
                                        <?= form_input($saransistemalumni) ?>
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


   
 <?= $this->endSection() ;?>