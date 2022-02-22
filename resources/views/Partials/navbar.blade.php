<nav class=" -expand-lg -dark bg-light">
  <div class="container">
    <a class="-brand" href="/">Raihan</a>
    <button class="-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#Nav" aria-controls="Nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="-toggler-icon"></span>
    </button>
    <div class="collapse -collapse" id="Nav">
      <ul class="-nav">
        <li class="nav-item">
          <a class="nav-link {{ ( $tittle === 'Home') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ( $tittle === 'About') ? 'active' : '' }}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ( $tittle === 'Gallery') ? 'active' : '' }}" href="/gallery">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ( $tittle === 'Contacts') ? 'active' : '' }}" href="/contacts">Contact us</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{route ('login')}}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route ('register')}}">Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>