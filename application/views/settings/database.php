<div class="container-fluid">

    <div class="row mt-3">
        <div class="col-xl-8 col-lg-8 col-md-19 col-sm-12">
            <h3 class="h3 text-gray-800 my-2"><?= $judul; ?></h3>

            <div class="card border-left-info shadow-sm my-3 p-4">

                <div class="card-body rounded-sm p-3 mb-3 mr-4 shadow-sm">
                    <i class="fa fa-fw fa-info-circle fa-lg"></i> <strong> Perhatikan baik-baik saat melakukan <i>Back Up</i> ataupun <i>Restore</i> data.</strong>
                </div>

                <?php if ($this->session->flashdata('msg')) : ?>
                    <div class="alert alert-success alert-dismissible fade show mr-4" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong><?= $this->session->flashdata('msg'); ?></strong> data berhasil dilakukan.
                    </div>
                <?php endif; ?>

                <?php if ($this->session->flashdata('err')) : ?>
                    <div class="alert alert-danger alert-dismissible fade show mr-4" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        Proses <strong><?= $this->session->flashdata('err'); ?></strong> data gagal dilakukan. File Back Up tidak ditemukan!
                    </div>
                <?php endif; ?>


                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                        <form action="<?= base_url('database/backup'); ?>" method="POST">
                            <input type="hidden" name="filterby" value="semua">

                            <button type="submit" name="backup" class="btn btn-primary btn-block shadow-sm mb-1"><i class="fa fa-fw fa-cloud-download-alt"></i> BACK UP</button>
                        </form>

                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <button type="button" data-toggle="modal" data-target="#modalRestore" class="btn btn-primary btn-block shadow-sm"><i class="fa fa-fw fa-cloud-upload-alt"></i> Restore</button>
                    </div>

                </div>

            </div>

        </div>
    </div>

</div>
</div>

<!-- Modal -->
<!-- Modal Hapus -->
<div class="modal fade" id="modalRestore" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header badge-primary">
                <h5 class="modal-title">Restore Database</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('database/restore'); ?>" method="POST">
                <div class="modal-body">
                    Apakah anda yakin ingin melakukan restore data?
                    <input type="hidden" name="filterby" value="semua">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" name="restore" class="btn btn-primary">Yakin</button>
                </div>
            </form>
        </div>
    </div>
</div>