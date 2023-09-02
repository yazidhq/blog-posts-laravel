<nav class="navbar navbar-expand-lg bg-danger navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="/">Yazid's Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">

        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ $title === "Home" ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $title === "About" ? 'active' : '' }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $title === "All Posts" ? 'active' : '' }}" href="/posts">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $title === "Categories" ? 'active' : '' }}" href="/categories">Category</a>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto">
          @auth
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Hello, {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar"></i> My Dashboard</a></li>
                  <hr class="dropdown-divider">
                  <li>
                    <form action="/logout" method="post">
                      @csrf
                      <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i> Logout</button>
                    </form>
                  </li>
                </ul>
              </li>
          @endauth

          @guest
              <li class="nav-item">
                <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Login</a>
              </li>
          @endguest
        </ul>
        
      </div>
    </div>
</nav>