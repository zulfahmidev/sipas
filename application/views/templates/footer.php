<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; PERSURATAN PNBP MAHKAMAH AGUNG REPUBLIK INDONESIA <?= date('Y') ?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header badge-primary">
                <h5 class="modal-title" id="logoutModalLabel">Yakin ingin keluar?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Klik "logout" jika ingin mengakhiri sesi ini.</div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
                <a class="btn btn-primary" href="<?= base_url('auth/logout') ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/') ?>js/sb-admin-2.min.js"></script>

<!-- Datatables -->
<script src="<?= base_url('assets/') ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/rowreorder/1.2.7/js/dataTables.rowReorder.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>

<!-- Sweet Alert 2 -->
<script src="<?= base_url('assets/') ?>vendor/sweetalert/sweetalert2.all.min.js"></script>

<script>
    $(document).ready(function() {

        // pengaturan
        $(document).on("click", "#ubah-jabatan", function() {
            $(".modal-body .id").val($(this).data('id'));
            $(".modal-body .nama").val($(this).data('nama'));
            $(".modal-body .jabatan").val($(this).data('jabatan'));
        });

        $(document).on("click", "#ubah-sifat", function() {
            $(".modal-body .id").val($(this).data('id'));
            $(".modal-body .sifat").val($(this).data('sifat'));
        });

        $(document).on("click", "#ubah-role", function() {
            $(".modal-body .id").val($(this).data('id'));
            $(".modal-body .role").val($(this).data('role'));
        });

        $(document).on("click", "#hapus-pengguna", function() {
            $(".modal-body #id").val($(this).data('id'));
        });
        $(document).on("click", "#hapus-role", function() {
            $(".modal-body #id").val($(this).data('id'));
        });
        $(document).on("click", "#hapus-jabatan", function() {
            $(".modal-body #id").val($(this).data('id'));
        });
        $(document).on("click", "#hapus-sifat", function() {
            $(".modal-body #id").val($(this).data('id'));
        });
        $(document).on("click", "#hapus-dispos", function() {
            $(".modal-body #id").val($(this).data('id'));
        });

        // ajax validasi modal
        $(".btn-tambah").click(function() {
            // reset form tambah untuk menghindari muncul data sebelumnya saat tombol ubah di klik
            $('form:eq(1)')[0].reset();
            $(".is-valid").removeClass("is-valid");
            $(".is-invalid").removeClass("is-invalid");
            $(".invalid-feedback").empty();
        });

        $("#formTambahRole").submit(function(e) {
            e.preventDefault();

            var form = $("#formTambahRole");
            var role = $("#role").val();

            $.ajax({
                url: form.attr('action'),
                type: form.attr('method'),
                dataType: 'json',
                data: {
                    role: role
                },
                success: function(data) {
                    if ($.isEmptyObject(data.error)) {
                        $("#role").addClass('is-valid');
                        $("#role").removeClass('is-invalid');
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: data.success,
                            showConfirmButton: false,
                            timer: 1000
                        })
                        setTimeout(function() {
                            location.reload();

                        }, 1000);
                    } else {
                        $("#role").addClass('is-invalid');
                        $(".invalid-feedback").html(data.error)
                    }
                }
            });
        });

        $("#formTambahJabatan").submit(function(e) {
            e.preventDefault();

            var form = $("#formTambahJabatan");
            var nama = $("#nama").val();
            var jabatan = $("#jabatan").val();

            $.ajax({
                url: form.attr('action'),
                type: form.attr('method'),
                dataType: 'json',
                data: {
                    nama: nama,
                    jabatan: jabatan
                },
                success: function(data) {
                    if ($.isEmptyObject(data.error)) {
                        $("#jabatan").addClass('is-valid');
                        $("#jabatan").removeClass('is-invalid');
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: data.success,
                            showConfirmButton: false,
                            timer: 1000
                        })
                        setTimeout(function() {
                            location.reload();
                        }, 1000);
                    } else {
                        $("#jabatan").addClass('is-invalid');
                        $(".invalid-feedback").html(data.error)
                    }
                }
            });
        });

        $("#formTambahSifat").submit(function(e) {
            e.preventDefault();

            var form = $("#formTambahSifat");
            var sifat = $("#sifat").val();

            $.ajax({
                url: form.attr('action'),
                type: form.attr('method'),
                dataType: 'json',
                data: {
                    sifat: sifat
                },
                success: function(data) {
                    if ($.isEmptyObject(data.error)) {
                        $("#sifat").addClass('is-valid');
                        $("#sifat").removeClass('is-invalid');
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: data.success,
                            showConfirmButton: false,
                            timer: 1000
                        })
                        setTimeout(function() {
                            location.reload();
                        }, 1000);
                    } else {
                        $("#sifat").addClass('is-invalid');
                        $(".invalid-feedback").html(data.error)
                    }
                }
            });
        });

        $(".btn-ubah").click(function() { // reset semua pesan error sebelumnya jika ada
            $(".is-invalid").removeClass('is-invalid');
        });

        $("#formUbahRole").submit(function(e) {
            e.preventDefault();

            var form = $("#formUbahRole")
            var data = $(this).serialize()
            console.log(data)

            $.ajax({
                url: form.attr('action'),
                type: form.attr('method'),
                dataType: 'json',
                data: data,
                success: function(data) {
                    if ($.isEmptyObject(data.error)) {
                        $(".role").addClass('is-valid');
                        $(".role").removeClass('is-invalid');
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: data.success,
                            showConfirmButton: false,
                            timer: 1000
                        })
                        setTimeout(function() {
                            location.reload();
                        }, 1000);
                    } else {
                        $(".role").addClass('is-invalid');
                        $(".invalid-feedback").html(data.error)
                    }
                }
            });
        });

        $("#formUbahJabatan").submit(function(e) {
            e.preventDefault();

            var form = $("#formUbahJabatan");

            $.ajax({
                url: form.attr('action'),
                type: form.attr('method'),
                dataType: 'json',
                data: $(this).serialize(),
                success: function(data) {
                    if ($.isEmptyObject(data.error)) {
                        $(".jabatan").addClass('is-valid');
                        $(".jabatan").removeClass('is-invalid');
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: data.success,
                            showConfirmButton: false,
                            timer: 1000
                        })
                        setTimeout(function() {
                            location.reload();
                        }, 1000);
                    } else {
                        $(".jabatan").addClass('is-invalid');
                        $(".invalid-feedback").html(data.error)
                    }
                }
            });
        });

        $("#formUbahSifat").submit(function(e) {
            e.preventDefault();

            var form = $("#formUbahSifat");

            $.ajax({
                url: form.attr('action'),
                type: form.attr('method'),
                dataType: 'json',
                data: $(this).serialize(),
                success: function(data) {
                    if ($.isEmptyObject(data.error)) {
                        $(".sifat").addClass('is-valid');
                        $(".sifat").removeClass('is-invalid');
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: data.success,
                            showConfirmButton: false,
                            timer: 1000
                        })
                        setTimeout(function() {
                            location.reload();
                        }, 1000);
                    } else {
                        $(".sifat").addClass('is-invalid');
                        $(".invalid-feedback").html(data.error)
                    }
                }
            });
        });

        // Upload file (name)
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });

        // Preview Gambar
        function preview_image(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('output_image');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }

        // checkbox selection - hapus
        $("#centangSemua").on("click", function(e) {
            if ($(this).is(":checked")) {
                $(".centangId").prop("checked", true)
            } else {
                $(".centangId").prop("checked", false)
            }
        });

        // Sweet Alert 2 x Flash Data
        var swal = $(".flashdata").data("flashdata");
        if (swal) {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: `Data berhasil ${swal}`,
                showConfirmButton: false,
                timer: 1200
            })
        }

        // DataTables - Surat Masuk
        tblSuratMasuk();

        function tblSuratMasuk() {
            $('#dataSm').DataTable({
                responsive: true,
                "destroy": true,
                "processing": true,
                "serverSide": true,
                "order": [],

                "ajax": {
                    "url": "<?= base_url('sm/ambildata') ?>",
                    "type": "POST"
                },
                scrollY: '270px',
                // dom: 'Brftip',

                "columnDefs": [{
                    "targets": [0, 3, 4, 5],
                    "orderable": false,
                    // "width": 5
                }],
            });
        }

        $(".formsm").submit(function(e) {
            e.preventDefault();

            let jmlSm = $(".centangId:checked").length; // jumlah data yang terpilih (selected)
            if (jmlSm === 0) { // jika tidak ada data yang dipilih, maka
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Tidak ada data yang terpilih!',
                })
            } else {
                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: `anda akan menghapus ${jmlSm} data`,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yakin!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: $(this).attr('method'),
                            url: $(this).attr('action'),
                            data: $(this).serialize(),
                            dataType: 'json',
                            success: function(response) {
                                if (response.berhasil) {
                                    Swal.fire(
                                        'Berhasil!',
                                        response.berhasil,
                                        'success'
                                    )
                                    tblSuratMasuk();
                                }
                            },
                            error: function(xhr, ajaxOptions, thrownError) {
                                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError)
                            }

                        });
                    }
                })
            }
        });

        // DataTables - Surat Keluar
        tblSuratKeluar();

        function tblSuratKeluar() {
            $('#dataSk').DataTable({
                responsive: true,
                "destroy": true,
                "processing": true,
                "serverSide": true,
                "order": [],

                "ajax": {
                    "url": "<?= base_url('sk/ambildata') ?>",
                    "type": "POST"
                },
                scrollY: '270px',

                "columnDefs": [{
                    "targets": [0, 3, 4, 5],
                    "orderable": false,
                    // "width": 5
                }],
            });
        }

        $(".formsk").submit(function(e) {
            e.preventDefault();

            let jmlSk = $(".centangId:checked").length; // jumlah data yang terpilih (selected)
            if (jmlSk === 0) { // jika tidak ada data yang dipilih, maka
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Tidak ada data yang terpilih!',
                })
            } else {
                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: `anda akan menghapus ${jmlSk} data`,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yakin!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: $(this).attr('method'),
                            url: $(this).attr('action'),
                            data: $(this).serialize(),
                            dataType: 'json',
                            success: function(response) {
                                if (response.berhasil) {
                                    Swal.fire(
                                        'Berhasil!',
                                        response.berhasil,
                                        'success'
                                    )
                                    tblSuratKeluar();
                                }
                            },
                            error: function(xhr, ajaxOptions, thrownError) {
                                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError)
                            }

                        });
                    }
                })
            }
        });

    });
</script>

</body>

</html>