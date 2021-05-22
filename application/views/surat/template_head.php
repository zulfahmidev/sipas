

<div class="container-fluid">

<!-- Flash data -->
<div class="flashdata" data-flashdata="<?= $this->session->flashdata('msg'); ?>"></div>

<div class="row mt-4">
    <div class="col-12">

        <h3 class="judul h3 text-gray-800">Daftar <?= $judul ?></h3>

        <div class="card shadow mb-4">

            <div id="app">
            <div class="card-header py-3">
                <span id="base_url" class="d-none"><?= base_url() ?></span>
                <form action="<?= base_url('/unduh-surat') ?>" method="post" id="form">
                    <input type="hidden" name="html" ref="html" :value="html">
                </form>
                <button @click="cetak" id="cetak" class="btn btn-primary shadow-sm"><i class="fas fa-fw fa-print"></i> Cetak Surat</button>
            </div>