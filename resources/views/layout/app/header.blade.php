{{-- <nav class="navbar bg-body-tertiary">
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
    
    }
  </style>
 --}}



<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <img src="{{ url('images/logo.png') }}" alt="" style="cursor: pointer;"  class="logo m-auto">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item ">
            <a class="nav-link active text-black fw-light" aria-current="page" href="#">HOME</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active text-black fw-light" aria-current="page" href="#">ABOUT</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-black fw-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              PRODUCT
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">MAKARONI</a></li>
              <li><a class="dropdown-item" href="#">KRIPIK PISANG</a></li>
              <li><a class="dropdown-item" href="#">BASRENG</a></li>
              <li><a class="dropdown-item" href="#">USUS KRISPI</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black fw-light" href="#">TESTIMONIALS</a>
          </li>
          
          <li class="nav-item">
           <a href=""><img src="{{ url('images/profile.png') }}" alt="" width="40px"></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <style>
    nav{
    background-image: url('{{ url('images/bg2.png') }}');
    background-size: cover;
    
    }
  </style>