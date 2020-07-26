<?= $this->extend('layout/frame'); ?>
<?= $this->section('content'); ?>
<div class="container py-2">
  <div class="row">
    <div class="col">
      <?= $this->include('layout/navbar'); ?>
    </div>
  </div>
  <div class="row py-3 px-3">
    <div class="col">
      <div class="card-group">

        <div class="card cardbg shadow-lg">
          <img src="img/Logo.png" class="card-img-top py-5 px-5" alt="...">
          <div class="card-body bient">
            <h5 class="card-title">Lorem ipsum</h5>
            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium ipsum architecto voluptas optio deleniti magni. Harum laboriosam sequi natus perferendis recusandae expedita, corporis, accusantium est provident quia consequatur voluptate et.</p>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="row py-3 px-3">
    <div class="col">
      <div class="card">
        <div class="card-body">
          This is some text within a card body.
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>