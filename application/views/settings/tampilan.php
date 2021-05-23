<div class="container-fluid">

    <div class="row mt-4">
        <div class="col-12">

            
            <div class="card shadow mb-4">
                <div class="card-header">
                    <strong style="text-transform: uppercase;"><?= $judul ?></strong>
                </div>
                <div class="card-body">
                    <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success">
                        <strong>Success</strong> <?= $this->session->flashdata('success'); ?></strong>
                    </div>
                    <?php endif; ?>
                    <div class="row">
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-6">
                            <form action="" method="post"  enctype="multipart/form-data">
                                <label for="">Gambar Login:</label>
                                <div style="overflow:hidden;border-radius: 6px;width:fit-content;">
                                    <img src="http://localhost/sipas/assets/img/<?= $gambar_login ?>" height="200" alt="">
                                </div>
                                <div class="form-group mt-2">
                                    <input type="file" name="gambar_login" id="">
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-primary">Simpan Perubahan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>