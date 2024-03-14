<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="{{ url('images/logo.png') }}" alt="Logo" class="d-inline-block align-text-top p-2">
      </a>
      <div class="">
          <ul class="navbar-nav d-flex flex-row">
              <li class="nav-item mx-4">
                  <a class="nav-link active color-black" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link" href="#">ABOUT</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link" href="#">PRODUCT</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link" href="#">TESTIMONIALS</a>
                </li>
                <div >
                    <li class="nav-item mx-4">
                    <a href="">
                        <img src="{{ url('images/profile.png') }}" alt="logo">
                    </a>
                </li>
                </div>
            </ul>
        </div>
    </div>
  </nav>

  <style>
    nav{
    background-image: url('{{ url('images/bg2.png') }}');
    background-size: cover;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    }
  </style>