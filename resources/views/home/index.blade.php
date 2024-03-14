@extends('layout.app')
@section('content')
    <body>
        {{-- <div class="main container-fluid">
            <div class="container d-flex flex-row">
            <div class="tex-content  d-flex align-items-top">
                <div class="pp">
                    <h5>MAKARONI</h5>
                    <h3>CABAI MERAH</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, recusandae quaerat. Voluptatem repellat in minima, ab architecto corrupti qui eum nisi ipsam iusto quod ipsa delectus optio, quibusdam rerum unde.</p>
                </div>
            </div>
    
            <div class="image">
                <img src="{{ url('images/coklat.png')}}" alt="">
            </div>
        </div>
        </div> --}}

        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="main container-fluid">
            <div class="container d-flex flex-row">
            <div class="tex-content  d-flex align-items-top">
                <div class="pp">
                    <h5>MAKARONI</h5>
                    <h3>CABAI MERAH</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, recusandae quaerat. Voluptatem repellat in minima, ab architecto corrupti qui eum nisi ipsam iusto quod ipsa delectus optio, quibusdam rerum unde.</p>
                </div>
            </div>
    
            <div class="image">
                <img src="{{ url('images/cabe1.png')}}" alt="">
            </div>
        </div>
        </div>
              </div>
              <div class="carousel-item">
                <div class="main container-fluid">
            <div class="container d-flex flex-row">
            <div class="tex-content  d-flex align-items-top">
                <div class="pp">
                    <h5>USUS KRISPI</h5>
                    <h3>CABAI MERAH</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, recusandae quaerat. Voluptatem repellat in minima, ab architecto corrupti qui eum nisi ipsam iusto quod ipsa delectus optio, quibusdam rerum unde.</p>
                </div>
            </div>
    
            <div class="image">
                <img src="{{ url('images/cabe2.png')}}" alt="">
            </div>
        </div>
        </div>
              </div>
              <div class="carousel-item">
                <div class="main container-fluid">
            <div class="container d-flex flex-row">
            <div class="tex-content  d-flex align-items-top">
                <div class="pp">
                    <h5>BASRENG</h5>
                    <h3>CABAI MERAH</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, recusandae quaerat. Voluptatem repellat in minima, ab architecto corrupti qui eum nisi ipsam iusto quod ipsa delectus optio, quibusdam rerum unde.</p>
                </div>
            </div>
            <div class="image">
                <img src="{{ url('images/cabe3.png')}}" alt="">
            </div>
        </div>
        </div>
              </div>
              <div class="carousel-item">
                <div class="main container-fluid">
            <div class="container d-flex flex-row">
            <div class="tex-content  d-flex align-items-top">
                <div class="pp">
                    <h5>KRIPIK PISANG</h5>
                    <h3>COKLAT</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, recusandae quaerat. Voluptatem repellat in minima, ab architecto corrupti qui eum nisi ipsam iusto quod ipsa delectus optio, quibusdam rerum unde.</p>
                </div>
            </div>
            <div class="image">
                <img src="{{ url('images/coklat.png')}}" alt="">
            </div>
        </div>
        </div>
              </div>
              <div class="carousel-item">
                <div class="main container-fluid">
            <div class="container d-flex flex-row">
            <div class="tex-content  d-flex align-items-top">
                <div class="pp">
                    <h5>KRIPIK PISANG</h5>
                    <h3>STRAWBERRY</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, recusandae quaerat. Voluptatem repellat in minima, ab architecto corrupti qui eum nisi ipsam iusto quod ipsa delectus optio, quibusdam rerum unde.</p>
                </div>
            </div>
            <div class="image">
                <img src="{{ url('images/strawberry.png')}}" alt="">
            </div>
        </div>
        </div>
              </div>
              <div class="carousel-item">
                <div class="main container-fluid">
            <div class="container d-flex flex-row">
            <div class="tex-content  d-flex align-items-top">
                <div class="pp">
                    <h5>KRIPIK PISANG</h5>
                    <h3>TIRAMISU</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, recusandae quaerat. Voluptatem repellat in minima, ab architecto corrupti qui eum nisi ipsam iusto quod ipsa delectus optio, quibusdam rerum unde.</p>
                </div>
            </div>
            <div class="image">
                <img src="{{ url('images/tiramisusu.png')}}" alt="" class="tiramisu">
            </div>
        </div>
        </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>


          <div class="container">
            <div class="product-landing">
                <div class="content d-flex">
                    <div class="content-text p-4">
                        <h5>PRODUCT</h5>
                        <h1>Kripik</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium voluptates repellendus necessitatibus maxime quis ullam, porro omnis ad eveniet nulla illo nostrum nemo delectus facere a officia neque dolores eum.</p>
                    </div>
                    <div class="content-image">
                        <img src="{{ url('images/coklat.png')}}" alt="">
                    </div>
                </div>
            </div>
          </div>
    </body>
-=

    <style>

        .pp{
            max-width: 500px;
            margin-top: 100px
        }
        .main {
    background-image: url('{{ url('images/bg2.png') }}');
    background-size: cover; /* atau 'contain' */
    min-height: 300px; /* misalnya, atur nilai minimum tinggi */
    max-height: 500px; /* misalnya, atur nilai maksimum tinggi */
}
        .carousel-inner{
            height: 580px
        }
        .tiramisu{
            margin-left: 200px;
            margin-top: 80px
        }
        .product-landing{
            background-color: aqua;
        }
        .content-text{
            max-width: 500px;
        }

    </style>
@endsection
