<div class="container-fluid">

    <div class="row">
        <div class="col-12 mb-4">
            <h3 class="h3 text-gray-800"><?= $judul; ?></h3>
            <?= form_open_multipart() ?>
            <div class="row mt-4">
                <div class="col">
                    <input type="hidden" name="id" value="<?= $surat['id']; ?>">
                    <div class="form-group">
                        <label for="no_agenda">No. Agenda</label>
                        <input type="text" name="no_agenda" id="no_agenda" class="form-control <?= form_error('no_agenda') ? 'is-invalid' : 'border-left-primary' ?>" value="<?= set_value('no_agenda') ? set_value('no_agenda') : $surat['no_agenda']; ?>">
                        <div class="invalid-feedback">
                            <?= form_error('no_agenda') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pengirim">Pengirim</label>
                        <input type="text" name="pengirim" id="pengirim" class="form-control <?= form_error('pengirim') ? 'is-invalid' : 'border-left-primary' ?>" value="<?= set_value('pengirim') ? set_value('pengirim') : $surat['pengirim']; ?>">
                        <div class="invalid-feedback">
                            <?= form_error('pengirim') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="no_surat">No. Surat</label>
                        <input type="text" name="no_surat" id="no_surat" class="form-control <?= form_error('no_surat') ? 'is-invalid' : 'border-left-primary' ?>" value="<?= set_value('no_surat') ? set_value('no_surat') : $surat['no_surat']; ?>">
                        <div class="invalid-feedback">
                            <?= form_error('no_surat') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi Ringkas</label>
                        <textarea name="isi" id="isi" cols="30" rows="4" class="form-control <?= form_error('isi') ? 'is-invalid' : 'border-left-primary' ?>"><?= set_value('isi') ? set_value('isi') : $surat['isi']; ?></textarea>
                        <div class="invalid-feedback">
                            <?= form_error('isi') ?>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="tgl_surat">Tanggal Surat</label>
                        <input type="date" name="tgl_surat" id="tgl_surat" class="form-control <?= form_error('tgl_surat') ? 'is-invalid' : 'border-left-primary' ?>" value="<?= set_value('tgl_surat') ? set_value('tgl_surat') : $surat['tgl_surat']; ?>">
                        <div class="invalid-feedback">
                            <?= form_error('tgl_surat') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tgl_diterima">Tanggal Diterima</label>
                        <input type="date" name="tgl_diterima" id="tgl_diterima" class="form-control <?= form_error('tgl_diterima') ? 'is-invalid' : 'border-left-primary' ?>" value="<?= set_value('tgl_diterima') ? set_value('tgl_diterima') : $surat['tgl_diterima']; ?>">
                        <div class="invalid-feedback">
                            <?= form_error('tgl_diterima') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label> <sup>*opsional</sup>
                        <input type="text" name="keterangan" id="keterangan" class="form-control border-left-primary" value="<?= set_value('keterangan') ? set_value('keterangan') : $surat['keterangan']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="file">Upload File</label>
                        <div class="custom-file">
                            <input type="file" name="file" class="custom-file-input" id="file">
                            <label class="custom-file-label" for="file">Choose file</label>
                            <small class="text-sm text-info">Format file yang diperbolehkan *.JPG, *.PNG, *.DOC/X, *.PDF dan ukuran maks 2 MB!</small>
                        </div>
                        <?= $this->session->flashdata('err'); ?>
                    </div>
                    <!-- User Updating -->
                    <input type="hidden" name="user_id" value="<?= $user['role_id']; ?>">
                    <div class="form-group">
                        <button type="submit" class="float-right btn btn-primary">Ubah Data</button>
                        <a href="<?= base_url('surat-keluar'); ?>" class="float-right btn btn-warning mr-2">Kembali</a>
                    </div>
                </div>
            </div>
            <?= form_close(); ?>
        </div>
    </div>

</div>

</div>