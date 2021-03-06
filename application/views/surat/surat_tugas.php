    <div id="surat" style="margin: auto;" class="create">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/froala/css/froala_editor.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/froala/css/froala_style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/froala/css/plugins/code_view.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/froala/css/plugins/colors.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/froala/css/plugins/emoticons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/froala/css/plugins/image_manager.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/froala/css/plugins/image.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/froala/css/plugins/line_breaker.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/froala/css/plugins/table.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/froala/css/plugins/char_counter.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/froala/css/plugins/video.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/froala/css/plugins/fullscreen.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/froala/css/plugins/file.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">
    <div class="header" style="border-bottom: 4px double #000;">
        <table style="width: 100%; text-align: center;">
            <tr v-if="kop == 0">
                <td>
                    <img src="<?= base_url('assets/img/logoMa.png') ?>" height="90" class="logo">
                </td>
                <td>
                    <div class="title">
                        <h2>MAKAMAH AGUNG REPUBLIK INDONESIA</h2>
                        <h2>BADAN URUSAN ADMINISTRASI</h2>
                    </div>
                    <div class="subtitle">
                        <p><small>JALAN MEDAN MERDEKA BARAT No.9-13 JAKARTA 10110 TROMOL POS NOMOR 1020</small></p>
                        <p><small>Telepon (021)3843348, 3810350, 3457661 Faksimili 3810361</small></p>
                    </div>
                </td>
            </tr>
            <tr v-if="kop == 1">
                <td>
                    <img src="<?= base_url('assets/img/logoSMA.png') ?>" height="90" class="logo">
                </td>
                <td>
                    <div class="title">
                        <h2>SEKRETARIS MAKAMAH AGUNG</h2>
                        <h2>REPUBLIK INDONESIA</h2>
                    </div>
                    <div class="subtitle">
                        <p><small>JALAN MEDAN MERDEKA UTARA No.9-13 JAKARTA 10110 - TROMOL POS NOMOR 1020</small></p>
                        <p><small>Telepon : (021) 3843348, 3810350, 3454546 / Fax : (021) 345353,3454546</small></p>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div id="view" class="fr-view pt-2">
        <div id="editor">
            <div id='edit' ref="html">

            </div>
        </div>
    </div>
</div>