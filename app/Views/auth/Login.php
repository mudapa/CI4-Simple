<?= $this->extend('layout/frame'); ?>
<?= $this->section('content'); ?>
<div class="container py-5 mt-3 mb-5">
  <div class="row py-3 mb-5">
    <div class="col text-center">
      <img src="img/Logo.png" alt="image" class="logo">
    </div>
  </div>
  <div class="row py-2">
    <div class="col align-self-end shadow ">
      <div class="card text-center mb-3 shadow">
        <div class="card-body">
          <img src="img/yoda.png" class="d-block w-100 yoda " alt="yoda">
        </div>
        <div class="card-body">
          <p class="card-text"><b class="bient">Skill yang istimewa cuma bisa didapat dengan proses yang istimewa juga.</b></p>
        </div>

      </div>
    </div>
    <div class="col align-self-center">
      <div class="card mb-5 shadow">
        <div class="card-header text-center">
          <b class="bient-b">Login</b>
        </div>
        <div class="card-body mt-3">
          <h5 class="card-title text-primary text-center">Selamat datang <span class="txt-rotate text-success" data-period="2000" data-rotate='[ "cuy.", "bro.", "bray.", "mamang." ]'></span></h5>
          <form action="login/isloggin" class="needs-validation" novalidate>
            <div class="form-row">
              <div class="col-md-12 mb-3">
                <label for="validationTooltip03">Email</label>
                <input type="text" class="form-control" id="validationTooltip03" name="email" required>
                <div class="invalid-tooltip">
                  Please provide a valid city.
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-12 mb-3">
                <label for="validationTooltip03">Password</label>
                <input type="password" class="form-control" id="validationTooltip03" name="password" required>
                <div class="invalid-tooltip">
                  Please provide a valid city.
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