<!-- Load Library Chart.js -->
<script src="<?= base_url('assets/') ?>vendor/chart.js/Chart.min.js"></script>

<div class="container-fluid">

    <?php if ($this->session->flashdata('message')) : ?>
        <!-- Modal Dialog berhasil login-->
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Login</strong> berhasil, selamat datang <strong><?= $this->session->flashdata('message'); ?></strong>.
        </div>
    <?php endif; ?>

    <!-- Section 1 -->
    <div class="row">

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href="<?= base_url('surat-masuk'); ?>" target="_blank" style="text-decoration: none; color: inherit;">Jumlah Surat Masuk</a> </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $suratMasuk; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-envelope-open-text fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><a href="<?= base_url('surat-keluar'); ?>" target="_blank" style="text-decoration: none; color: inherit;">Jumlah Surat Keluar</a></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $suratKeluar; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-paper-plane fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Surat Ter-Scan (Lihat Galeri File)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $file; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-file-archive fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a href="<?= base_url('pengaturan/klasifikasi'); ?>" target="_blank" style="text-decoration: none; color: inherit;">Jenjang Jabatan</a> </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $klasifikasi; ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Statistik Data Per Bulan</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="myPieChart"></canvas>
                        <script>
                            // Set new default font family and font color to mimic Bootstrap's default styling
                            Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
                            Chart.defaults.global.defaultFontColor = '#858796';

                            var ctx = document.getElementById("myPieChart");
                            var myPieChart = new Chart(ctx, {
                                type: 'doughnut',
                                data: {
                                    labels: ["Surat Keluar", "Surat Masuk"],
                                    datasets: [{
                                        data: [<?= !empty($skBulan) ? $skBulan : 0 ?>, <?= !empty($smBulan) ? $smBulan : 0 ?>],
                                        backgroundColor: ['#1cc88a', '#4e73df'],
                                        hoverBackgroundColor: ['#17a673', '#2e59d9'],
                                        hoverBorderColor: "rgba(234, 236, 244, 1)",
                                    }],
                                },
                                options: {
                                    maintainAspectRatio: false,
                                    tooltips: {
                                        backgroundColor: "rgb(255,255,255)",
                                        bodyFontColor: "#858796",
                                        borderColor: '#dddfeb',
                                        borderWidth: 1,
                                        xPadding: 15,
                                        yPadding: 15,
                                        displayColors: false,
                                        caretPadding: 10,
                                    },
                                    legend: {
                                        display: false
                                    },
                                    cutoutPercentage: 80,
                                },
                            });
                        </script>
                    </div>
                    <div class="mt-4 text-center small">
                        <span class="mr-2">
                            <i class="fas fa-circle text-primary"></i> Surat Masuk
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-success"></i> Surat Keluar
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bar Chart -->
        <?php
        $kosong = [];

        foreach ($smTahun as $data) {
            $month = date('m', strtotime($data['created_at'])); // ambil bulan saja
            $bulan[] = $month;
        }

        $count = array_count_values(!empty($bulan) ? $bulan : $kosong); // hitung jumlah value dari masing-masing elemen
        ksort($count); // sorting array keys

        // surat keluar
        foreach ($skTahun as $row) {
            $months = date('m', strtotime($row['created_at']));
            $bulanSk[] = $months;
        }

        $hitung = array_count_values(!empty($bulanSk) ? $bulanSk : $kosong);
        ksort($hitung);
        ?>

        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Statistik Sepanjang Tahun (12 Bulan Terakhir)</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area pt-4 pb-2">
                        <canvas id="myBarChart"></canvas>
                        <script>
                            Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
                            Chart.defaults.global.defaultFontColor = '#858796';

                            var ctz = document.getElementById("myBarChart");
                            var chart = new Chart(ctz, {
                                type: 'bar', // bisa juga horizontalBar

                                data: {
                                    labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
                                    datasets: [{
                                        label: "Surat Masuk",
                                        backgroundColor: 'rgb(78,115,223)',
                                        hoverBackgroundColor: '#2e59d9',
                                        data: [
                                            <?= !empty($count['01']) ? $count['01'] : 0; ?>, <?= !empty($count['02']) ? $count['02'] : 0; ?>, <?= !empty($count['03']) ? $count['03'] : 0; ?>, <?= !empty($count['04']) ? $count['04'] : 0; ?>, <?= !empty($count['05']) ? $count['05'] : 0; ?>, <?= !empty($count['06']) ? $count['06'] : 0; ?>, <?= !empty($count['07']) ? $count['07'] : 0; ?>, <?= !empty($count['08']) ? $count['08'] : 0; ?>, <?= !empty($count['09']) ? $count['09'] : 0; ?>, <?= !empty($count['10']) ? $count['10'] : 0; ?>, <?= !empty($count['11']) ? $count['11'] : 0; ?>, <?= !empty($count['12']) ? $count['12'] : 0; ?>
                                        ]
                                    }, {
                                        label: "Surat Keluar",
                                        backgroundColor: 'rgb(28,200,138)',
                                        hoverBackgroundColor: 'rgba(22, 160, 133, 1)',
                                        data: [
                                            <?= !empty($hitung['01']) ? $hitung['01'] : 0; ?>, <?= !empty($hitung['02']) ? $hitung['02'] : 0; ?>, <?= !empty($hitung['03']) ? $hitung['03'] : 0; ?>, <?= !empty($hitung['04']) ? $hitung['04'] : 0; ?>, <?= !empty($hitung['05']) ? $hitung['05'] : 0; ?>, <?= !empty($hitung['06']) ? $hitung['06'] : 0; ?>, <?= !empty($hitung['07']) ? $hitung['07'] : 0; ?>, <?= !empty($hitung['08']) ? $hitung['08'] : 0; ?>, <?= !empty($hitung['09']) ? $hitung['09'] : 0; ?>, <?= !empty($hitung['10']) ? $hitung['10'] : 0; ?>, <?= !empty($hitung['11']) ? $hitung['11'] : 0; ?>, <?= !empty($hitung['12']) ? $hitung['12'] : 0; ?>
                                        ]
                                    }]
                                },

                                options: {
                                    maintainAspectRatio: false,
                                    tooltips: {
                                        mode: 'index',
                                    },
                                    scales: {
                                        xAxes: [{
                                            stacked: true, // buat false untuk horizontal Bar
                                        }],
                                        yAxes: [{
                                            stacked: true,
                                            ticks: {
                                                beginAtZero: true,
                                                callback: function(value) {
                                                    if (Number.isInteger(value)) {
                                                        return value;
                                                    }
                                                },
                                                stepSize: 1
                                            }
                                        }]
                                    }
                                }
                            })
                        </script>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>