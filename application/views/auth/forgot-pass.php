<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2">Lupa Password?</h1>
                    <p class="mb-4">Tenang, silahkan masukkan email anda dibawah, kami akan mengirimkan email untuk me-reset ulang password anda.</p>
                    <div class="alert alert-info">
                      <small>Pastikan koneksi <strong>internet</strong> anda tersambung!</small>
                    </div>
                  </div>

                  <?= $this->session->flashdata('message') ?>

                  <form class="user" method="post" action="<?= base_url('auth/forgotpass'); ?>">
                    <div class="form-group">
                      <input type="text" name="email" class="form-control form-control-user <?= form_error('email') ? 'is-invalid' : 'border-left-primary' ?>" placeholder="Masukkan Email Anda..." value="<?= set_value('email'); ?>">
                      <div class="pl-2 invalid-feedback">
                        <?= form_error('email') ?>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Reset Password
                    </button>
                  </form>

                  <hr>
                  <div class="text-center">
                    <a class="small" href="<?= base_url('auth'); ?>">Sudah punya akun? Login!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>