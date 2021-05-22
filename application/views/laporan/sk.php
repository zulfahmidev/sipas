<div class="container-fluid">

    <!-- Judul & Card -->
    <div class="row">
        <div class="col-12">

            <h3 class="h3 text-gray-800"><?= $judul; ?></h3>

            <div class="card shadow-sm my-3">
                <div class="card-body border-left-info rounded-sm">
                    <i class="fa fa-fw fa-info-circle fa-lg"></i> <strong> Silahkan pilih tanggal surat untuk menemukan surat keluar yang diinginkan.</strong>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="<?= base_url('laporan/sk') ?>" method="post">
                <div class="form-row">
                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                        <label for="startdate">Dari Tanggal:</label>
                        <input type="date" name="startdate" class="form-control shadow-sm border-left-primary mb-3" id="startdate" value="<?= set_value('startdate'); ?>" required>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                        <label for="enddate">Sampai Tanggal: </label>
                        <input type="date" name="enddate" class="form-control shadow-sm border-left-primary mb-3" id="enddate" value="<?= set_value('enddate'); ?>" required>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                        <label for="filterby">Filter berdasarkan:</label>
                        <select name="filterby" class="form-control shadow-sm border-left-primary mb-3" id="filterby" required>
                            <option value="">-- Pilih --</option>
                            <option value="created_at" <?= set_select('filterby', 'created_at'); ?>>Tanggal Ditambah</option>
                            <option value="tgl_surat" <?= set_select('filterby', 'tgl_surat'); ?>>Tanggal Surat</option>
                            <option value="tgl_diterima" <?= set_select('filterby', 'tgl_diterima'); ?>>Tanggal Diterima</option>
                        </select>
                    </div>

                    <div class="col-xl-1 col-lg-1 col-md-12 col-sm-12">
                        <button type="submit" name="pdf" class="btn btn-outline-danger btn-block shadow-sm" style="margin-top: 2rem;">PDF</button>
                    </div>

                    <div class="col-xl-1 col-lg-1 col-md-12 col-sm-12">
                        <button type="submit" name="excel" class="btn btn-outline-success shadow-sm btn-block" style="margin-top: 2rem;">Excel</button>
                    </div>

                    <div class="col-xl-1 col-lg-1 col-md-12 col-sm-12">
                        <button type="submit" name="btncek" class="btn btn-primary btn-block shadow-sm btn-cek float-left" style="margin-top: 2rem;">Cek</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Table -->
    <div class="row mt-3">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No Agenda</th>
                            <th>Pengirim</th>
                            <th>No. Surat</th>
                            <th>Tanggal Surat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($surat_keluar)) : ?>
                            <?php if (empty($surat_keluar)) : ?>
                                <td colspan="5">
                                    <h3 class="text-center">Data tidak ditemukan.</h3>
                                </td>
                            <?php else : ?>
                                <?php foreach ($surat_keluar as $num => $sk) : ?>
                                    <tr>
                                        <td><?= $num + 1; ?></td>
                                        <td><?= $sk['pengirim']; ?></td>
                                        <td><?= $sk['no_surat']; ?></td>
                                        <td>
                                            <?php if ($sk['tgl_surat'] == 0000 - 00 - 00) : ?>
                                                <p><b>-</b></p>
                                            <?php else : ?>
                                                <?= date("d/m/Y", strtotime($sk['tgl_surat'])); ?>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('surat-keluar/') . $sk['id']; ?>" target="_blank" class="btn btn-sm btn-success">Detail</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="5">
                                    <h3 class="text-center">Belum ada data.</h3>
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /. Container-fluid -->
</div>