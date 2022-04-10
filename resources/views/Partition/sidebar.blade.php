    <div id="dash" class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark">
        <a href="/dashboard" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-4">AnimeWorld</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="/dashboard" class="nav-link text-white {{ ($title === "Dashboard") ? 'active' : '' }}" aria-current="page">
            Dashboard
            </a>
        </li>
        <li>
            <a href="/dashAnime" class="nav-link text-white {{ ($title === "DashAnime") ? 'active' : '' }}">
            Anime
            </a>
        </li>
        <li>
            <a href="/dashManga" class="nav-link text-white {{ ($title === "DashManga") ? 'active' : '' }}">
            Manga
            </a>
        </li>
        </ul>
        <hr>
        <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="img/profile.png" alt="image" width="32" height="32" class="rounded-circle me-2">
            <strong>Admin</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="/dashProfile">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/">Sign out</a></li>
        </ul>
        </div>
</div>