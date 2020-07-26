<?= $this->extend('layout/frame'); ?>
<?= $this->section('content'); ?>
<div class="container py-2">
  <div class="row">
    <div class="col">
      <?= $this->include('layout/navbar'); ?>
    </div>
  </div>
  <div class="row py-3">
    <div class="col px-5">
      <div class="card-body">
        <div class="row">
          <?php foreach ($role as $x => $value) { ?>
            <div class="col">
              <div class="card" style="width: 18rem;">
                <img src="img/yoda.png" class="card-img-top" alt="...">
                <div class="card-body text-center navbg">
                  <b class="card-text bient"><?= $value['nama_role'] ?></b>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row px-2">
    <div class="col">
      <div class="card text-center">
        <div class="card-header navbg">
          <b class="bient">Content</b>
        </div>
        <div class="card-body">
          <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, maxime laudantium. Officia natus cum quas sapiente, odio asperiores quia, nulla delectus deserunt nisi doloremque, temporibus in. Sapiente tempore repellendus iusto.</h5>
        </div>
        <div class="card-body">
          <hr width="50%">
          <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, eveniet. Molestiae blanditiis fugiat repellendus vel nihil amet, itaque perspiciatis inventore aut dolor laboriosam ipsa, optio voluptatum aliquam minus ratione? Dolorem.</h4>
        </div>
        <div class="card-body">
          <hr width="50%">
          <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, eveniet. Molestiae blanditiis fugiat repellendus vel nihil amet, itaque perspiciatis inventore aut dolor laboriosam ipsa, optio voluptatum aliquam minus ratione? Dolorem.</h3>
        </div>
        <div class="card-footer text-muted navbg">
          <b class="bient">Copyright &copy; Mudapa 2020</b>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>