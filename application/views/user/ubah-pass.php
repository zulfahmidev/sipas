<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 col-xs-12">

        <!-- Flash data -->
        <?php if ($this->session->flashdata('msg')) : ?>
            <div class="alert alert-danger"><?= $this->session->flashdata('msg'); ?> </div>
        <?php endif; ?>

        <?php if ($this->session->flashdata('ubahpass')) : ?>
            <?= $this->session->flashdata('ubahpass'); ?>
        <?php endif; ?>

            <form action="<?= base_url('user/ubahpass'); ?>" method="post">
                <div class="form-group">
                    <label for="password">Password Lama</label>
                    <input type="password" name="password" id="password" class="form-control shadow-sm <?= form_error('password') ? 'is-invalid' : 'border-left-primary' ?>" value="<?= set_value('password'); ?>">
                    <div class="invalid-feedback">
                            <?= form_error('password') ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="newpass">Password Baru</label>
                    <input type="password" name="newpass" id="newpass" class="form-control shadow-sm <?= form_error('newpass') ? 'is-invalid' : 'border-left-primary' ?>" value="<?= set_value('newpass'); ?>">
                    <div class="invalid-feedback">
                            <?= form_error('newpass') ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="newpass2">Konfirmasi Password</label>
                    <input type="password" name="newpass2" id="newpass2" class="form-control shadow-sm <?= form_error('newpass2') ? 'is-invalid' : 'border-left-primary' ?>">
                    <div class="invalid-feedback">
                            <?= form_error('newpass2') ?>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-block shadow-lg">Update</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->