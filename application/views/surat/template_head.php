<div class="container-fluid">
<link rel="stylesheet" href="<?= base_url('assets/css/surat.css') ?>">

<!-- Flash data -->
<div class="flashdata" data-flashdata="<?= $this->session->flashdata('msg'); ?>"></div>

<div class="row mt-4">
    <div class="col-12">

        <h3 class="judul h3 text-gray-800"><?= $judul ?></h3>

        <div class="card shadow mb-4">

            <div id="app">
            <div class="card-header py-3">
                <span id="base_url" class="d-none"><?= base_url() ?></span>
                <form action="<?= base_url('/unduh-surat') ?>" method="post" id="form">
                    <input type="hidden" name="html" ref="html" :value="html">
                </form>
                <button @click="cetak" class="btn btn-primary shadow-sm"><i class="fas fa-fw fa-print"></i> Cetak Surat</button>
                <button @click="edit" v-if="mode == 0" class="btn btn-primary shadow-sm"><i class="fas fa-fw fa-edit"></i> Edit Surat</button>
                <button @click="view" v-if="mode == 1" class="btn btn-primary shadow-sm"><i class="fas fa-fw fa-eye"></i> View Surat</button>
                <button @click="importHTML" class="btn btn-primary shadow-sm"><i class="fas fa-fw fa-file-import"></i> Import</button>
                <input type="file" id="file_upload" accept=".docx" style="display: none;">
            </div>