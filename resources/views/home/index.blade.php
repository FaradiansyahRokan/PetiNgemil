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
            <div class="container d-flex flex-row ">
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

          
         <div class="product_card container px-5" style="position: relative;">
    <div class="product-landing">
        <div class="content d-flex justify-content-between">
            <div class="content-text p-5">
                <h5>PRODUCT</h5>
                <h1>Kripik</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium voluptates repellendus necessitatibus maxime quis ullam, porro omnis ad eveniet nulla illo nostrum nemo delectus facere a officia neque dolores eum.</p>
            </div>
            <div class="content-image d-flex" style="position: absolute; right: 0; top: 50%; transform: translateY(-50%);">
                <img src="{{ url('images/product-img.png')}}" alt="" width="600px"> 
            </div>
        </div>
    </div>
</div>

<div class="container d-flex justify-content-center" style="margin-top: 100px">
    <div class="product_list">
        <div class="content_title text-center">
            <h2>Product</h2>
            <p style="max-width: 350px">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. At, quasi voluptas ipsum corporis,.
            </p>
        </div>
    </div>
</div>

<div class="container">
      <div class="row mt-4">
        <div class="col-lg-3 col-md-3 col-sm-4 col-6 mt-3">
          <div class="card text-center">
            <div class="img__product">
            <img src="https://www.maternaldisaster.com/wp-content/uploads/2022/11/xlmk-tour-ls-1-500x500.jpg" class="card-img-top" data-bs-toggle="offcanvas" data-bs-target="#xlmk" aria-controls="offcanvasBottom"  alt="...">
          </div>
            <div class="card-body">
              <h6 class="card-title">XLMK Tour LS</h6>
              <p class="card-text mt-2">Rp. 199.000</p>

            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-4 col-6 mt-3">
          <div class="card text-center">
            <div class="img__product">
            <img src="https://www.maternaldisaster.com/wp-content/uploads/2022/12/drc-11-max-1-500x500.jpg" class="card-img-top" data-bs-toggle="offcanvas" data-bs-target="#drc" aria-controls="offcanvasBottom"  alt="...">
          </div>
            <div class="card-body">
              <h6 class="card-title">DRC 11 MAX</h6>
              <p class="card-text mt-2">Rp. 69.000</p>

            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-4 col-6 mt-3">
          <div class="card text-center">
            <div class="img__product">
            <img src="https://www.maternaldisaster.com/wp-content/uploads/2022/12/wark-1-500x500.jpg" class="card-img-top" data-bs-toggle="offcanvas" data-bs-target="#klavi" aria-controls="offcanvasBottom"  alt="...">
          </div>
            <div class="card-body">
              <h6 class="card-title">KLAVI</h6>
              <p class="card-text mt-2">Rp. 249.000</p>

            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-4 col-6 mt-3">
          <div class="card text-center">
            <div class="img__product"><img src="https://www.maternaldisaster.com/wp-content/uploads/2022/12/mutant-1-500x500.jpg" class="card-img-top" data-bs-toggle="offcanvas" data-bs-target="#mutant" aria-controls="offcanvasBottom"  alt="...">
            </div>
            <div class="card-body">
              <h6 class="card-title">MUTANT</h6>
              <p class="card-text mt-2">Rp. 169.000</p>

            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-4 col-6 mt-3">
          <div class="card text-center">
            <div class="img__product">
            <img src="https://www.maternaldisaster.com/wp-content/uploads/2022/09/stumb-1-500x500.jpg" class="card-img-top" data-bs-toggle="offcanvas" data-bs-target="#vexillum" aria-controls="offcanvasBottom"  alt="...">
          </div>
            <div class="card-body">
              <h6 class="card-title">VEXILLUM</h6>
              <p class="card-text mt-2">Rp. 169.000</p>

            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-4 col-6 mt-3">
          <div class="card text-center">
            <div class="img__product">
            <img src="https://www.maternaldisaster.com/wp-content/uploads/2022/12/anima-1-500x500.jpg" class="card-img-top" data-bs-toggle="offcanvas" data-bs-target="#anima" aria-controls="offcanvasBottom"  alt="...">
          </div>
            <div class="card-body">
              <h6 class="card-title">ANIMA</h6>
              <p class="card-text mt-2">Rp. 169.000</p>

            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-4 col-6 mt-3">
          <div class="card text-center">
            <div class="img__product">
            <img src="https://www.maternaldisaster.com/wp-content/uploads/2022/12/atrax-1-500x500.jpg" class="card-img-top" data-bs-toggle="offcanvas" data-bs-target="#internal" aria-controls="offcanvasBottom"  alt="...">
          </div>
            <div class="card-body">
              <h6 class="card-title">INTERNAL</h6>
              <p class="card-text mt-2">Rp. 249.000</p>

            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-4 col-6 mt-3">
          <div class="card text-center">
            <div class="img__product">
            <img src="hones-1-500x500.jpg" class="card-img-top" data-bs-toggle="offcanvas" data-bs-target="#vandal" aria-controls="offcanvasBottom"  alt="...">
          </div>
            <div class="card-body">
              <h6 class="card-title">VANDAL</h6>
              <p class="card-text mt-2">Rp. 469.000</p>

            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-4 col-6 mt-3">
          <div class="card text-center">
            <div class="img__product">
            <img src="matsuit.jpg" class="card-img-top" data-bs-toggle="offcanvas" data-bs-target="#matsuit" aria-controls="offcanvasBottom"  alt="...">
          </div>
            <div class="card-body">
              <h6 class="card-title">MATSUIT</h6>
              <p class="card-text mt-2">Rp. 1.199.000</p>

            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-4 col-6 mt-3">
          <div class="card text-center">
            <div class="img__product">
            <img src="noxious.jpg" class="card-img-top" data-bs-toggle="offcanvas" data-bs-target="#nexion" aria-controls="offcanvasBottom"  alt="...">
          </div>
            <div class="card-body">
              <h6 class="card-title">NEXION</h6>
              <p class="card-text mt-2">Rp. 1.600.000</p>

            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-4 col-6 mt-3">
          <div class="card text-center">
            <div class="img__product">
            <img src="severed.jpg" class="card-img-top" data-bs-toggle="offcanvas" data-bs-target="#hexoid" aria-controls="offcanvasBottom" alt="...">
          </div>
            <div class="card-body">
              <h6 class="card-title">SEVERED</h6>
              <p class="card-text mt-2">Rp. 1.600.000 </p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-4 col-6 mt-3">
          <div class="card text-center">
            <div class="img__product">
              <img src="jam.jpg" class="card-img-top" data-bs-toggle="offcanvas" data-bs-target="#severed" aria-controls="offcanvasBottom" alt="...">
          </div>
            <div class="card-body">
              <h6 class="card-title">HEXOID</h6>
              <p class="card-text mt-2">Rp. 219.000 </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 text-center">
        <a href="" class="btn btn-outline-light rounded-0 px-4 py-2 text-uppercase" style="width: 30%;">View More</a>
      </div>
    </div>


    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="xlmk">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasBottomLabel">XLMK</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body small d-flex">
         <img src="https://www.maternaldisaster.com/wp-content/uploads/2022/11/xlmk-tour-ls-1-500x500.jpg" alt="">
         <div class="desc">
          <div class="title">
        <h3 class="product_title entry-title">PUPPET</h3>
        <span class="d-inline-block font-primary font-weight-normal text-dark text-uppercase letter-spacing-1">Disarray</span>
        <h4 class="price mt-1 mb-0"><span ><bdi><span>Rp </span>1.600.000</bdi></span></h4>
      </div>
        <div class="row no-gutters m-0 p-0 variations">
            <h5 class="label">Size</h5>
          <div class="col-12 value">
            <div class="row no-gutters justify-content-md-end align-items-center value-wrapper">
              <div class="select-wrapper">
                <select id="pa_size" class="form-control">
                  <option>Choose an option</option>
                  <option>S</option>
                  <option>M</option>
                  <option>L</option>
                  <option>XL</option>
                  <option>XXL</option>
                </select>
              </div>
              <button type="submit" class=" alt btn btn-lg btn-dark" ><i class="flaticon-cart-outline"></i>&nbsp; Add to cart</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    </body>
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
        .product_card{
            margin-top: 100px;
        }
        .product-landing{
            background-color: #DBD3CD;
            border-radius: 5px;
            height: 500px;
        }
        .content-text{
            max-width: 500px;
        }


        .imgf{
    padding: 15px;
    border-radius: 5px;
}
.img__02{
    cursor: pointer;
}
  
.img__product {
    box-shadow: 0px 4px 25px rgba(14, 36, 49, 0.15);
    overflow: hidden;
    cursor: pointer;
  }
  
.img__product img {
    transition: 0.6s;
  }

.img__product img:hover {
    transform: scale(1.1);
  }

.card-title{
    font-size: 15px;
}
.card-text{
    font-size: 13px;
}
    </style>
@endsection
