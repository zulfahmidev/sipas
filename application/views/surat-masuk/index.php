<div class="container-fluid">


    <div class="row mt-4">
        <div class="col-12">

            <!-- Flash data -->
            <div class="flashdata" data-flashdata="<?= $this->session->flashdata('msg'); ?>"></div>

            <div class="row">
                <div class="col">

                    <h3 class="judul h3 text-gray-800">Daftar <?= $judul ?></h3>

                    <div class="card shadow mb-4">

                        <?= form_open('sm/hapus_multiple', ['class' => 'formsm']); ?>
                        <div class="card-header py-3">
                            <a href="<?= base_url('surat-masuk/tambah'); ?>" class="btn btn-primary shadow-sm"><i class="fas fa-fw fa-plus"></i> Tambah Data</a>

                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash-alt"></i> Hapus Data</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped display nowrap" style="width: 100%;" id="dataSm">
                                    <thead>
                                        <tr>
                                            <th>
                                                <input type="checkbox" id="centangSemua">
                                            </th>
                                            <th>No. Agenda</th>
                                            <th>Pengirim</th>
                                            <th>No. Surat</th>
                                            <th>Tanggal Surat</th>
                                            <th>File</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <?= form_close(); ?>
                    </div>

                </div>


            </div>
        </div>
    </div>

</div>
</div>


<!-- Modal Hapus || tidak terpakai -->
<div class="modal fade" id="modalHapus" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header badge-primary">
                <h5 class="modal-title">Hapus <?= $judul; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('sm/hapus'); ?>" method="post">
                <div class="modal-body">
                    Apakah anda yakin ingin menghapus data ini?
                    <input type="hidden" name="id" id="id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Yakin</button>
                </div>
            </form>
        </div>
    </div>
</div>