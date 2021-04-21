<!DOCTYPE html>
<html lang="en">
<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <title>Guess The Painting</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <link rel="stylesheet" href="home/css/bootstrap.min.css">
   <link rel="stylesheet" href="home/css/style.css">
   <link rel="stylesheet" href="home/css/responsive.css">
   <link rel="icon" href="home/images/fevicon.png" type="image/gif" />
   <link rel="stylesheet" href="home/css/jquery.mCustomScrollbar.min.css">
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<body class="main-layout">
   <div class="loader_bg">
      <div class="loader"><img src="home/images/loading.gif" alt="#" /></div>
   </div>
   <header>
      <div class="header">
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo"> <a href="{{ route('home') }}">GuessPainting</a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                              <li class="active"> <a href="{{ route('home') }}">Home</a> </li>
                              <li> <a href="#about">How To Play</a> </li>
                              <li> <a href="#testimonial">Contact us</a> </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
   </header>
   @include('admin.partials.error')
   @include('admin.partials.notifications')
   @yield('content')
   <section class="slider_section">
      <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img class="first-slide" src="home/images/banner3.jpg" alt="First slide">
               <div class="container">
                  <div class="carousel-caption relative">
                     <h1>Lets Play Online Painting Game</h1>
                     <p>If you don't know how to play the game, click on 'how to play' </p>
                     <a href="{{ route('dashboard') }}">Play Now</a>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <img class="second-slide" src="home/images/banner2.jpg" alt="Second slide">
               <div class="container">
                  <div class="carousel-caption relative">
                     <h1>Lets Play Online Painting Game</h1>
                     <p>If you don't know how to play the game, click on 'how to play' </p>
                     <a href="{{ route('dashboard') }}">Play Now</a>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <img class="third-slide" src="home/images/banner1.jpg" alt="Third slide">
               <div class="container">
                  <div class="carousel-caption relative">
                     <h1>Lets Play Online Painting Game</h1>
                     <p>If you don't know how to play the game, click on 'how to play' </p>
                     <a href="{{ route('dashboard') }}">Play Now</a>
                  </div>
               </div>
            </div>
         </div>
         <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <i class='fa fa-angle-left'></i>
         </a>
         <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <i class='fa fa-angle-right'></i>
         </a>
      </div>
   </section>
   <div id="about" class="about top_layer">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>Learn How to Play</h2>
                  <span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and </span>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="img-box">
                  <figure><img src="home/images/about.png" alt="img" /></figure>
                  <a href="#">read more</a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="testimonial" class="testimonial">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h3>Testimonial</h3>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6" style="margin-left: 25%;">
               <div class="contact">
                  <h3>Contact Us</h3>
                  <form>
                     <div class="row">
                        <div class="col-sm-12">
                           <input class="contactus" placeholder="Name" type="text" name="Name">
                        </div>
                        <div class="col-sm-12">
                           <input class="contactus" placeholder="Phone" type="text" name="Email">
                        </div>
                        <div class="col-sm-12">
                           <input class="contactus" placeholder="Email" type="text" name="Email">
                        </div>
                        <div class="col-sm-12">
                           <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                        </div>
                        <div class="col-sm-12">
                           <button class="send">Send</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   <footr>
      <div class="footer">
         <div class="container">
            <div class="row">
               <div class="col-lg-2 col-md-6 col-sm-12 width">
                  <div class="address">
                     <h3>Address</h3>
                     <i><img src="home/icon/3.png">Locations</i>
                  </div>
               </div>
               <div class="col-lg-2 col-md-6 col-sm-12 width">
                  <div class="address">
                     <h3>Menus</h3>
                     <i><img src="home/icon/2.png">Locations</i>
                  </div>
               </div>
               <div class="col-lg-2 col-md-6 col-sm-12 width">
                  <div class="address">
                     <h3>Useful Linkes</h3>
                     <i><img src="home/icon/1.png">Locations</i>
                  </div>
               </div>
               <div class="col-lg-2 col-md-6 col-sm-12 width">
                  <div class="address">
                     <h3>Social Media </h3>
                     <ul class="contant_icon">
                        <li><img src="home/icon/fb.png" alt="icon" /></li>
                        <li><img src="home/icon/tw.png" alt="icon" /></li>
                        <li><img src="home/icon/lin (2).png" alt="icon" /></li>
                        <li><img src="home/icon/instagram.png" alt="icon" /></li>
                     </ul>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 width">
                  <div class="address">
                     <h3>Newsletter </h3>
                     <input class="form-control" placeholder="Enter your email" type="type" name="Enter your email">
                     <button class="submit-btn">Subscribe</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footr>
   <script src="home/js/jquery.min.js"></script>
   <script src="home/js/popper.min.js"></script>
   <script src="home/js/bootstrap.bundle.min.js"></script>
   <script src="home/js/jquery-3.0.0.min.js"></script>
   <script src="home/js/plugin.js"></script>
   <script src="home/js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="home/js/custom.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   <script>
      $(document).ready(function() {
         $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
         });

         $(".zoom").hover(function() {

            $(this).addClass('transition');
         }, function() {

            $(this).removeClass('transition');
         });
      });
   </script>
</body>

</html>