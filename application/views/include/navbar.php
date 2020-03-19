<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?= base_url('dash/home'); ?>" id="text1">Blood Bank</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBar-news" aria-controls="navBar-news" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navBar-news">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('dash/home'); ?>">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('main'); ?>">Cheack Availability</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('dash/join'); ?>">Join Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('dash'); ?>">New Donor</a>
      </li>
      <li class="nav-item dropdown">
        <a class="btn btn-danger" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?= base_url('auth'); ?>">Admin</a>
          <a class="dropdown-item" href="#">Users</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('dash/about'); ?>">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('dash/contact'); ?>">Contact Us</a>
      </li>
    </ul>    
  </div>
</nav>
