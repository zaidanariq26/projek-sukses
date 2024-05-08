<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #003F7D;">
    <div class="container">
      <a class="navbar-brand" href="/"><img class="logo" src="img/kominfo-logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}"  href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Lowongan Magang") ? 'active' : '' }}" href="/posts">Lowongan Magang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="/about">Tentang Kominfo</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Login") ? 'active' : '' }}" href="/login"><img style="width: 24px" src="img/icons8-login-50.png" alt=""> Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>