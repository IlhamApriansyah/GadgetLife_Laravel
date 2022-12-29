<nav class="navbar navbar-expand-lg navbar-absolute navbar-dark bg-dark">
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="{{url ('/')}}">GadgetLife</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{'dashboard'}}">Dashboard</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{'product'}}">Produk</a>
    </li>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
    </button>
    <div class="collapse navbar-collapse" id="navigation">
      <ul class="navbar-nav ml-auto">
        <li class="dropdown nav-item">
          <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
            <div class="photo">
              <img src="{{ asset ('assets/image/Male.png') }}" alt="Profile Photo">
            </div>
            <b class="caret d-none d-lg-block d-xl-block"></b>
            <p class="d-lg-none">
              Log out
            </p>
          </a>
          <ul class="dropdown-menu dropdown-navbar">
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </ul>
        </li>
        <li class="separator d-lg-none"></li>
      </ul>
    </div>
  </ul>
  </nav>