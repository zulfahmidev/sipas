<div class="container-fluid">

    <!-- Flash data -->
    <div class="flashdata" data-flashdata="<?= $this->session->flashdata('msg'); ?>"></div>

    <div class="row mt-4">
        <div class="col-12">

            <h3 class="judul h3 text-gray-800">Daftar <?= $judul ?></h3>

            <div class="card shadow mb-4">

                <?= form_open('sk/hapus_multiple', ['class' => 'formsk']); ?>

                <div class="card-header py-3">
                    <a href="<?= base_url('surat-keluar/tambah'); ?>" class="btn btn-primary shadow-sm"><i class="fas fa-fw fa-plus"></i> Tambah Data</a>

                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash-alt"></i> Hapus Data</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped display nowrap" id="dataSk">
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