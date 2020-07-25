<nav class="navbar navbar-expand-lg navbar-light navbg shadow rounded-pill">
  <a class="navbar-brand" href="#"><img src="img/Logo.png" alt="Logo" class="navlog"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav bient">
      <li class="nav-item">
        <a class="nav-link" href="/admin"><b>Home</b></a>
      </li>
    </ul>
  </div>
  <div class="nav-item dropdown">
    <?php $user = session()->get('username'); { ?>
      <a class="nav-link dropdown-toggle" style="margin-right:40px;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b class="bient"><?= $user; ?></b></a>
    <?php } ?>
    <div class="dropdown-menu navbg" aria-labelledby="navbarDropdown" style="margin-top: 8px;margin-left: -15px;">
      <a class="dropdown-item text-center" href="/logout"><b class="text-danger">Logout</b></a>
    </div>
  </div>
</nav>