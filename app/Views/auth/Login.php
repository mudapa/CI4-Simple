<?= $this->extend('layout/frame'); ?>
<?= $this->section('content'); ?>
<div class="container py-5 mt-3 mb-5">
  <div class="row py-3 mb-5">
    <div class="col text-center">
      <img src="img/Logo.png" alt="image" class="logo">
    </div>
  </div>
  <div class="row py-2">
    <div class="col align-self-end shadow rd-full">
      <div class="card text-center mb-3 shadow rd-full">

        <img src="img/yoda.png" class="card-img-top yoda rd" alt="yoda">

        <div class="card-body">
          <p class="card-text"><b class="bient shadow-sm">Skill yang istimewa cuma bisa didapat dengan proses yang istimewa juga.</b></p>
        </div>

      </div>
    </div>
    <div class="col align-self-center">
      <div class="card mb-5 shadow rd-full">
        <div class="shadow text-center">
          <h3 class="bient-b">Login</h3>
        </div>
        <div class="card-body mt-3">
          <h4 class="card-title text-primary text-center">Selamat datang <span class="txt-rotate bient" data-period="2000" data-rotate='[ "cuy.", "bro.", "bray.", "mamang." ]'></span></h4>
          <form action="login/isloggin" class="needs-validation" novalidate>
            <div class="form-row">
              <div class="col-md-12 mb-3">
                <label for="validationTooltip03">Email</label>
                <ion-icon name="at"></ion-icon><input type="text" class="form-control" id="validationTooltip01" name="email" required placeholder="Email@example.com">
                <div class="invalid-tooltip">
                  Email harus diisi boss.
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-12 mb-3">
                <label for="validationTooltip03">Password</label>
                <ion-icon name="lock-closed-outline"></ion-icon> <input type="password" class="form-control" id="validationTooltip02" name="password" required placeholder="Password">
                <div class="invalid-tooltip">
                  Password harus diisi boss.
                </div>
              </div>
            </div>
            <button class="btn btn-primary" style="float: right;" type="submit">
              Login
            </button>
          </form>
        </div>

      </div>
    </div>
  </div>
  <div class="mt-3 text-center">
    <b class="bient">Copyright &copy; Mudapa 2020</b>
  </div>
</div>
<?= $this->endSection(); ?>