<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow mb-5">
    <div class="container-fluid">
      <h5><i class="bi bi-eyeglasses me-1 mt-1 text-white"></i></h5>
      <a class="navbar-brand text-white" href="#">MyShop</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav mb-2 mb-lg-0 me-auto">
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Orders</a>
          </li>
          <form class="d-flex">
            <input class="form-control " type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-secondary text-white" type="submit">Search</button>
          </form>
        </ul>
        <ul class="nav navbar-nav navbar-right me-2">
          <li class="nav-item"><a href="/login" class=" nav-link bi bi-cart text-white">Cart(0)  </a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle bi bi-person text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Setting</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item">
                      <i class="bi bi-box-arrow-left">Logout</i>
                    </button>
                  </form>
                </li>
              </ul>
            </li>
          @else 
          <li class="nav-item"><a href="/login" class="nav-link bi bi-box-arrow-in-right text-white">Login</a></li>
          @endauth
        </ul>
      </div>
    </div>
</nav>