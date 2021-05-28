<div class="container-fluid">

    <div class="row mt-4">
        <div class="col-12">

            
            <div class="card shadow mb-4">
                <div class="card-header">
                    <strong style="text-transform: uppercase;"><?= $judul ?></strong>
                </div>
                <div class="card-body">
                    <?php if ($this->session->flashdata('alerts')) : ?>
                        <?php foreach ($this->session->flashdata('alerts') as $alert) : ?>
                        <div class="alert alert-<?= $alert['type'] ?>">
                                <strong><?= $alert['index'] ?></strong> <?= $alert['message']; ?></strong>
                        </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <div class="row">
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-6">
                            <form action="" method="post"  enctype="multipart/form-data">
                            
                                <label for="">Name:</label>
                                <div class="form-group mt-2">
                                    <input type="text" class="form-control border-left-primary" placeholder="<?= $web_name; ?>" value="<?= $web_name; ?>" name="web_name" id="">
                                </div>

                                <label for="">Logo:</label>
                                <div style="overflow:hidden;border-radius: 6px;width:fit-content;">
                                    <img src="http://localhost/sipas/assets/img/main/<?= $logo ?>" height="200" alt="">
                                </div>
                                <div class="form-group mt-2">
                                    <input type="file" name="logo" id="">
                                </div>

                                <label for="">Gambar Login:</label>
                                <div style="overflow:hidden;border-radius: 6px;width:fit-content;">
                                    <img src="http://localhost/sipas/assets/img/main/<?= $gambar_login ?>" height="200" alt="">
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