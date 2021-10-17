<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="/"><img src="img/logo1.png" alt="logo" width="40"></a>
    <a class="navbar-brand" href="/"><img src="img/logo2.png" alt="logo" width="100"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
        <a class="nav-link {{ ($active === "profile") ? 'active' : '' }}" href="/profile">Profile</a>
        <a class="nav-link {{ ($active === "facilities") ? 'active' : '' }}" href="/facilities">Facilities</a>
        <a class="nav-link {{ ($active === "contact") ? 'active' : '' }}" href="/contact">Contact Us</a>
      </div>
    </div>
  </div>
</nav>