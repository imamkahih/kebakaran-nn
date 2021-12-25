<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="main.php">
      <h3 class="fw-bold m-0">FOREST FIRE PREDICTION</h3>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-3">
        <li class="nav-item">
          <a class="nav-link <?=@$tittle == 'home' ? 'active' : '';?>" aria-current="page" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?=@$tittle == 'about' ? 'active' : '';?>" href="about.php">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?=@$tittle == 'datacenter' ? 'active' : '';?>" href="datacenter.php">DATA CENTER</a>
        </li>
    </div>
  </div>
</nav>