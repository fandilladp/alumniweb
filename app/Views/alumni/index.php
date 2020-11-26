<?php 
helper('auth');
?>
<?= $this->extend('layout/templatehome'); ?>

<?= $this->section('isicontent'); ?>

<div class="card pt-3 mb-4">
    <?= $this->include('layout/navbar'); ?>
    <div class="mt-5 card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">

                <tbody>
                    <?php for ($i = 0; $i < $jumlah; $i++) : ?>
                        <tr>

                            <td width="20%"><img width="100%" height="100%" class="rounded img-thumbnail" src="<?= base_url('uploads/' . $avatar[$i]) ?>" alt=""></td>
                            <td>
                                <h4><?= $namaalumni[$i]; ?></h4>
                                <hr>
                                <p><?= $deskripsi[$i]; ?></p>
                            </td>
                            <?php if (user()->status != 'tamu') : ?>
                                <td><a href="<?= base_url('alumni/view/' . $id[$i]); ?>"><button class="mt-5 btn btn-outline-warning align-bottom">view</button></a></td>
                            <?php endif ?>
                        </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endsection(); ?>
<!-- Logout Modal-->
<div class="modal fade" id="test" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <a id="delete" class="btn btn-danger" href="<?= base_url('auth/logout'); ?>">logout</a>
            </div>
        </div>
    </div>
</div>