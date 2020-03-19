<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?= base_url('dash/home'); ?>" id="text1">Blood Bank</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBar-news" aria-controls="navBar-news" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navBar-news">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('Auth/home'); ?>">Request <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('dash/donoroutput'); ?>">New Donor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Auth/joins'); ?>">New Joins</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Auth/contact'); ?>">Contact</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-danger" href="<?= base_url('auth/logout'); ?>">LogOut</a>
      </li>
    </ul>    
  </div>
</nav>
