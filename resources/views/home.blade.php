<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Jetcycle</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{!! asset('theme/css/bootstrap.css') !!}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="{!! asset('theme/css/style.css') !!}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{!! asset('theme/css/responsive.css') !!}" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <img src="{!! asset('theme/images/logo.png') !!}" alt="">
            <span>
              Jetcycle
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about">About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="cycle"> Our cycles </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact">Contact us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> Login </a>
                </li>
              </ul>
              <div class="quote_btn-container ">
                <a href="" class="call_link">
                  <span> Call Now: </span>+01 1234567890
                </a>
                <a href="" class="cart_link">
                  <img src="{!! asset('theme/images/cart.png') !!}" alt="">
                  <span class="cart_number">
                    0
                  </span>
                </a>
                <form class="form-inline ">
                  <button class="btn  nav_search-btn" type="submit"></button>
                </form>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="jet_box">
        <hr>
        <h6>
          jetcycle
        </h6>
        <hr>
      </div>
      <ol class="carousel-indicators indicator-2">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active indicator-li-1">01</li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
      </ol>
      <div class="container-fluid h-100">
        <div class="row">
          <div class="col-md-4 offset-md-1">
            <div class="detail-box">
              <h1>
                Racing <br>
                <span>
                  Man cycle
                </span>
              </h1>
              <p>
                There are many variations of passages of Lorem Ipsum available.
              </p>
              <div class="btn-box">
                <a href="" class="btn-1">
                  Shop Now
                </a>
                <a href="" class="btn-2">
                  Get A Quote
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-7 px-0 h-100">
            <div class="img_container h-100">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators indicator-1">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active indicator-li-1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="img-box">
                      <img src="{!! asset('theme/images/slider-img.png') !!}" alt="">
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="img-box">
                      <img src="{!! asset('theme/images/slider-img.png') !!}" alt="">
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="img-box">
                      <img src="{!! asset('theme/images/slider-img.png') !!}" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-5 ">
          <div class="img-box">
            <img src="{!! asset('theme/images/about-img.png') !!}" alt="">
          </div>
        </div>
        <div class="col-md-6 offset-md-1">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                about cycle
              </h2>
            </div>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in some form, by injected humour, or randomised words which don't look even slightly believable.
            </p>
            <a href="">
              About More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end about section -->

  <!-- cycle section -->

  <section class="cycle_section ">
    <div class="container">
      <div class="cycle_heading">
        <h2>
          Top Sale Cycles
        </h2>
      </div>
      <div class="cycle_container">
        <div class="box">
          <div class="box-content">
            <div class="img-box">
              <img src="{!! asset('theme/images/t-1.png') !!}" alt="">
            </div>
            <div class="detail-box">
              <div class="text">
                <h6>
                  Kids Cycle
                </h6>
                <h5>
                  <span>$</span> 300
                </h5>
              </div>
              <div class="like">
                <h6>
                  Like
                </h6>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="btn-box">
            <a href="">
              Add To Cart
            </a>
          </div>
        </div>
        <div class="box">
          <div class="box-content">
            <div class="img-box">
              <img src="{!! asset('theme/images/t-1.png') !!}" alt="">
            </div>
            <div class="detail-box">
              <div class="text">
                <h6>
                  Kids Cycle
                </h6>
                <h5>
                  <span>$</span> 300
                </h5>
              </div>
              <div class="like">
                <h6>
                  Like
                </h6>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="btn-box">
            <a href="">
              Add To Cart
            </a>
          </div>
        </div>
        <div class="box">
          <div class="box-content">
            <div class="img-box">
              <img src="{!! asset('theme/images/t-1.png') !!}" alt="">
            </div>
            <div class="detail-box">
              <div class="text">
                <h6>
                  Kids Cycle
                </h6>
                <h5>
                  <span>$</span> 300
                </h5>
              </div>
              <div class="like">
                <h6>
                  Like
                </h6>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="btn-box">
            <a href="">
              Add To Cart
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end cycle section -->


  <!-- cycle section -->

  <section class="cycle_section ">
    <div class="container">
      <div class="cycle_heading">
        <h2>
          Feature Cycles
        </h2>
      </div>
      <div class="cycle_container">
        <div class="box">
          <div class="box-content">
            <div class="img-box">
              <img src="{!! asset('theme/images/f-1.png') !!}" alt="">
            </div>
            <div class="detail-box">
              <div class="text">
                <h6>
                  Man Cycle
                </h6>
                <h5>
                  <span>$</span> 300
                </h5>
              </div>
              <div class="like">
                <h6>
                  Like
                </h6>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="btn-box">
            <a href="">
              Add To Cart
            </a>
          </div>
        </div>
        <div class="box">
          <div class="box-content">
            <div class="img-box">
              <img src="{!! asset('theme/images/f-1.png') !!}" alt="">
            </div>
            <div class="detail-box">
              <div class="text">
                <h6>
                  Man Cycle
                </h6>
                <h5>
                  <span>$</span> 300
                </h5>
              </div>
              <div class="like">
                <h6>
                  Like
                </h6>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="btn-box">
            <a href="">
              Add To Cart
            </a>
          </div>
        </div>
        <div class="box">
          <div class="box-content">
            <div class="img-box">
              <img src="theme/images/f-1.png" alt="">
            </div>
            <div class="detail-box">
              <div class="text">
                <h6>
                  Man Cycle
                </h6>
                <h5>
                  <span>$</span> 300
                </h5>
              </div>
              <div class="like">
                <h6>
                  Like
                </h6>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="btn-box">
            <a href="">
              Add To Cart
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end cycle section -->


  <!-- cycle section -->

  <section class="cycle_section ">
    <div class="container">
      <div class="cycle_heading">
        <h2>
          New Arrivals
        </h2>
      </div>
      <div class="cycle_container">
        <div class="box">
          <div class="box-content">
            <div class="img-box">
              <img src="theme/images/t-1.png" alt="">
            </div>
            <div class="detail-box">
              <div class="text">
                <h6>
                  Kids Cycle
                </h6>
                <h5>
                  <span>$</span> 300
                </h5>
              </div>
              <div class="like">
                <h6>
                  Like
                </h6>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="btn-box">
            <a href="">
              Add To Cart
            </a>
          </div>
        </div>
        <div class="box">
          <div class="box-content">
            <div class="img-box">
              <img src="theme/images/f-1.png" alt="">
            </div>
            <div class="detail-box">
              <div class="text">
                <h6>
                  Man Cycle
                </h6>
                <h5>
                  <span>$</span> 300
                </h5>
              </div>
              <div class="like">
                <h6>
                  Like
                </h6>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="btn-box">
            <a href="">
              Add To Cart
            </a>
          </div>
        </div>
        <div class="box">
          <div class="box-content">
            <div class="img-box">
              <img src="theme/images/n-1.png" alt="">
            </div>
            <div class="detail-box">
              <div class="text">
                <h6>
                  Kids Cycle
                </h6>
                <h5>
                  <span>$</span> 300
                </h5>
              </div>
              <div class="like">
                <h6>
                  Like
                </h6>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="btn-box">
            <a href="">
              Add To Cart
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end cycle section -->



  <!-- client section -->
  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container ">
        <h2>
          What is says our clients
        </h2>
      </div>
      <div id="carouselExample2Indicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExample2Indicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="1"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="client_container layout_padding2">
              <div class="client_detail">
                <p>
                  There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                  alteration in

                </p>
              </div>
              <div class="client_box ">
                <div class="img-box">
                  <img src="theme/images/client.png" alt="">
                </div>
                <div class="name">
                  <h5>
                    Randomised
                  </h5>
                  <h6>
                    <span>
                      Lorem Ipsum
                    </span>
                    <img src="theme/images/quote.png" alt="">
                  </h6>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_container layout_padding2">
              <div class="client_detail">
                <p>
                  There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                  alteration in
                  some form, by injected humour, or randomised words which don look even slightly believable.
                </p>
              </div>
              <div class="client_box ">
                <div class="img-box">
                  <img src="theme/images/client.png" alt="">
                </div>
                <div class="name">
                  <h5>
                    Randomised
                  </h5>
                  <h6>
                    <span>
                      Lorem Ipsum
                    </span>
                    <img src="theme/images/quote.png" alt="">
                  </h6>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_container layout_padding2">
              <div class="client_detail">
                <p>
                  There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                  alteration in some form, by injected humour, or randomised words which dont look
                </p>
              </div>
              <div class="client_box ">
                <div class="img-box">
                  <img src="theme/images/client.png" alt="">
                </div>
                <div class="name">
                  <h5>
                    Randomised
                  </h5>
                  <h6>
                    <span>
                      Lorem Ipsum
                    </span>
                    <img src="theme/images/quote.png" alt="">
                  </h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end client section -->

  <!-- contact section -->

  <section class="contact_section">
    <div class="contact_container">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="contact_form layout_padding">
              <div class="heading_container">
                <h2>
                  Get in touch
                </h2>
              </div>
              <form action="">
                <input type="text" placeholder="Full name ">
                <div class="top_input">
                  <input type="email" placeholder="Email">
                  <input type="text" placeholder="Phone Number">
                </div>

                <input type="text" placeholder="Message" class="message_input">
                <button>
                  Send
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- subscribe section -->

  <section class="subscribe_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-7 mx-auto">
          <div class="subscribe_form ">
            <div class="heading_container">
              <h2>
                subscribe our newsletter
              </h2>
            </div>
            <form action="">
              <input type="email" placeholder="Enter your email">
              <button>
                subscribe
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end subscribe section -->



  <!-- info section -->
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="logo_detail">
            <div class="logo-box">
              <a class="navbar-brand" href="index.html">
                <img src="theme/images/logo.png" alt="">
                <span>
                  Jetcycle
                </span>
              </a>
            </div>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in some form, by injected humour, or
            </p>
          </div>
        </div>
        <div class="col-md-5">
          <div class="address_box">
            <h6>
              Adderess
            </h6>
            <p>
              passages of Lorem Ipsum available, but the majority have
            </p>
            <p>
              (+71) 1234567890
            </p>
            <a href="">
              demo@gmail.com
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="link_box">
            <h6>
              Menu
            </h6>
            <ul class="  ">
              <li class=" ">
                <a class="" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="">
                <a class="" href="about.html">About </a>
              </li>
              <li class="">
                <a class="" href="cycle.html"> Our cycles </a>
              </li>
              <li class="">
                <a class="" href="contact.html">Contact us</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="social_container">
        <div class="social_box">
          <a href="">
            <img src="theme/images/facebook-logo-button.png" alt="">
          </a>
          <a href="">
            <img src="theme/images/twitter-logo-button.png" alt="">
          </a>
          <a href="">
            <img src="theme/images/linkedin.png" alt="">
          </a>
          <a href="">
            <img src="theme/images/instagram.png" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->

  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <p>
      &copy; 2019 All Rights Reserved By
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </footer>
  <!-- footer section -->

  <script type="text/javascript" src="theme/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="theme/js/bootstrap.js"></script>
  <script>
    $(".carousel").on("slid.bs.carousel", function () {
      $(".indicator-2 li").removeClass("active");
      indicators = $(".carousel-indicators li.active").data("slide-to");



    })
  </script>

</body>

</html>
