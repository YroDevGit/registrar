<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?=current_page()?></title>
	<link rel="icon" href="img/Fevicon.png" type="image/png">

  <link rel="stylesheet" href="<?=assets("landing")?>/vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="<?=assets("landing")?>/vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="<?=assets("landing")?>/vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="<?=assets("landing")?>/vendors/linericon/style.css">
  <link rel="stylesheet" href="<?=assets("landing")?>/vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?=assets("landing")?>/vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="<?=assets("landing")?>/css/style.css">
  <style>
    .hero-banner{
        background:url(<?=assets("landing/images/wvsu3.jpg")?>) left center no-repeat;
        background-size:cover;
    }
    .ximg{
      height: 300px;
    }
  </style>
</head>
<body>
  <!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.html"><img height="80" width="80" src="<?=assets("img/wvsulogo.png")?>" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-center">
              <li class="nav-item active"><a class="nav-link" href="<?=page('login')?>">WVSU PORTAL</a></li> 
              <li class="nav-item active" style="display: none;"><a class="nav-link" href="<?=page('teacherlogin')?>">Teacher</a></li> 
            </ul>
            <ul class="nav navbar-nav navbar-right navbar-social">
              <li><a href="#"><i class="ti-facebook"></i></a></li>
              <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
              <li><a href="#"><i class="ti-instagram"></i></a></li>
              <li><a href="#"><i class="ti-skype"></i></a></li>
            </ul>
          </div> 
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->
  
  <main class="site-main">
    <!--================Hero Banner start =================-->  
    <section class="mb-30px">
      <div class="container">
        <div class="hero-banner">
          <div class="hero-banner__content">
            <h3>West Visayas State University</h3>
            <h1>WVSU</h1>
            <h4>2025</h4>
          </div>
        </div>
      </div>
    </section>
    <!--================Hero Banner end =================-->  

    <!--================ Blog slider start =================-->  
    <section>
      <div class="container">
        <div class="owl-carousel owl-theme blog-slider">
          <div class="card blog__slide text-center" >
            <div class="blog__slide__img">
              <img class="card-img ximg rounded-0" onclick="changeImg('wvsu1.jpg')" src="<?=assets("landing")?>/images/wvsu1.jpg" alt="">
            </div>
            <div class="blog__slide__content">
              
              <h3><a href="#">wvsu</a></h3>
              <p>2 days ago</p>
            </div>
          </div>
          <div class="card blog__slide text-center">
            <div class="blog__slide__img">
              <img class="card-img ximg rounded-0" src="<?=assets("landing")?>/images/wvsu2.jpg" alt="">
            </div>
            <div class="blog__slide__content">
              
              <h3><a href="#">wvsu</a></h3>
              <p>2 days ago</p>
            </div>
          </div>
          <div class="card blog__slide text-center">
            <div class="blog__slide__img">
              <img class="card-img ximg rounded-0" src="<?=assets("landing")?>/images/wvsu7.jpg" alt="">
            </div>
            <div class="blog__slide__content">
              
              <h3><a href="#">wvsu</a></h3>
              <p>2 days ago</p>
            </div>
          </div>
          <div class="card blog__slide text-center">
            <div class="blog__slide__img">
              <img class="card-img ximg rounded-0" src="<?=assets("landing")?>/images/wvsu4.jpg" alt="">
            </div>
            <div class="blog__slide__content">
              
              <h3><a href="#">wvsu</a></h3>
              <p>2 days ago</p>
            </div>
          </div>
          <div class="card blog__slide text-center">
            <div class="blog__slide__img">
              <img class="card-img ximg rounded-0" src="<?=assets("landing")?>/images/wvsu5.jpg" alt="">
            </div>
            <div class="blog__slide__content">
              
              <h3><a href="#">wvsu</a></h3>
              <p>2 days ago</p>
            </div>
          </div>
          <div class="card blog__slide text-center">
            <div class="blog__slide__img">
              <img class="card-img ximg rounded-0" src="<?=assets("landing")?>/images/wvsu6.jpg" alt="">
            </div>
            <div class="blog__slide__content">
              
              <h3><a href="#">wvsu</a></h3>
              <p>2 days ago</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Blog slider end =================-->  

    <!--================ Start Blog Post Area =================-->
    <section class="blog-post-area section-margin mt-4">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="single-recent-blog-post">
              <div class="thumb">
                <img class="img-fluid" src="<?=assets("landing")?>/images/wvsu2.jpg" alt="">
                <ul class="thumb-info">
                  <li><a href="#"><i class="ti-user"></i>Admin</a></li>
                  <li><a href="#"><i class="ti-notepad"></i>January 12,2019</a></li>
                  <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                </ul>
              </div>
              <div class="details mt-20">
                <a href="blog-single.html">
                  <h3>sample text
                    </h3>
                </a>
                <p class="tag-list-inline">Tag: <a href="#">travel</a>, <a href="#">life style</a>, <a href="#">technology</a>, <a href="#">fashion</a></p>
                <p>Over yielding doesn't so moved green saw meat hath fish he him from given yielding lesser cattle were fruitful lights. Given let have, lesser their made him above gathered dominion sixth. Creeping deep said can't called second. Air created seed heaven sixth created living</p>
                <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
              </div>
            </div>

            <div class="single-recent-blog-post">
              <div class="thumb">
                <img class="img-fluid" src="<?=assets("landing")?>/images/wvsu1.jpg" alt="">
                <ul class="thumb-info">
                  <li><a href="#"><i class="ti-user"></i>Admin</a></li>
                  <li><a href="#"><i class="ti-notepad"></i>January 12,2019</a></li>
                  <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                </ul>
              </div>
              <div class="details mt-20">
                <a href="blog-single.html">
                  <h3>sample text</h3>
                </a>
                <p class="tag-list-inline">Tag: <a href="#">travel</a>, <a href="#">life style</a>, <a href="#">technology</a>, <a href="#">fashion</a></p>
                <p>Over yielding doesn't so moved green saw meat hath fish he him from given yielding lesser cattle were fruitful lights. Given let have, lesser their made him above gathered dominion sixth. Creeping deep said can't called second. Air created seed heaven sixth created living</p>
                <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
              </div>
            </div>

            <div class="single-recent-blog-post">
              <div class="thumb">
                <img class="img-fluid" src="<?=assets("landing")?>/images/wvsu3.jpg" alt="">
                <ul class="thumb-info">
                  <li><a href="#"><i class="ti-user"></i>Admin</a></li>
                  <li><a href="#"><i class="ti-notepad"></i>January 12,2019</a></li>
                  <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                </ul>
              </div>
              <div class="details mt-20">
                <a href="blog-single.html">
                  <h3>Sample text </h3>
                </a>
                <p class="tag-list-inline">Tag: <a href="#">travel</a>, <a href="#">life style</a>, <a href="#">technology</a>, <a href="#">fashion</a></p>
                <p>Over yielding doesn't so moved green saw meat hath fish he him from given yielding lesser cattle were fruitful lights. Given let have, lesser their made him above gathered dominion sixth. Creeping deep said can't called second. Air created seed heaven sixth created living</p>
                <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
              </div>
            </div>

            <div class="single-recent-blog-post">
              <div class="thumb">
                <img class="img-fluid" src="<?=assets("landing")?>/images/wvsu4.jpg" alt="">
                <ul class="thumb-info">
                  <li><a href="#"><i class="ti-user"></i>Admin</a></li>
                  <li><a href="#"><i class="ti-notepad"></i>January 12,2019</a></li>
                  <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                </ul>
              </div>
              <div class="details mt-20">
                <a href="blog-single.html">
                  <h3>sample text</h3>
                </a>
                <p class="tag-list-inline">Tag: <a href="#">travel</a>, <a href="#">life style</a>, <a href="#">technology</a>, <a href="#">fashion</a></p>
                <p>Over yielding doesn't so moved green saw meat hath fish he him from given yielding lesser cattle were fruitful lights. Given let have, lesser their made him above gathered dominion sixth. Creeping deep said can't called second. Air created seed heaven sixth created living</p>
                <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
              </div>
            </div>

            

            <div class="row">
              <div class="col-lg-12">
                  <nav class="blog-pagination justify-content-center d-flex">
                      <ul class="pagination">
                          <li class="page-item">
                              <a href="#" class="page-link" aria-label="Previous">
                                  <span aria-hidden="true">
                                      <i class="ti-angle-left"></i>
                                  </span>
                              </a>
                          </li>
                          <li class="page-item active"><a href="#" class="page-link">1</a></li>
                          <li class="page-item"><a href="#" class="page-link">2</a></li>
                          <li class="page-item">
                              <a href="#" class="page-link" aria-label="Next">
                                  <span aria-hidden="true">
                                      <i class="ti-angle-right"></i>
                                  </span>
                              </a>
                          </li>
                      </ul>
                  </nav>
              </div>
            </div>
          </div>

          <!-- Start Blog Post Siddebar -->
          <div class="col-lg-4 sidebar-widgets">
              <div class="widget-wrap">
                <div class="single-sidebar-widget newsletter-widget">
                  <h4 class="single-sidebar-widget__title">Newsletter</h4>
                  <div class="form-group mt-30">
                    <div class="col-autos">
                      <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Enter email'">
                    </div>
                  </div>
                  <button class="bbtns d-block mt-20 w-100">Subcribe</button>
                </div>


                <div class="single-sidebar-widget post-category-widget">
                  <h4 class="single-sidebar-widget__title">Catgory</h4>
                  <ul class="cat-list mt-20">
                    <li>
                      <a href="#" class="d-flex justify-content-between">
                        <p>Technology</p>
                        <p>(03)</p>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="d-flex justify-content-between">
                        <p>Software</p>
                        <p>(09)</p>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="d-flex justify-content-between">
                        <p>Lifestyle</p>
                        <p>(12)</p>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="d-flex justify-content-between">
                        <p>Shopping</p>
                        <p>(02)</p>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="d-flex justify-content-between">
                        <p>Food</p>
                        <p>(10)</p>
                      </a>
                    </li>
                  </ul>
                </div>

                <div style="display: none;" class="single-sidebar-widget popular-post-widget">
                  <h4 class="single-sidebar-widget__title">Popular Post</h4>
                  <div class="popular-post-list">
                    <div class="single-post-list">
                      <div class="thumb">
                        <img class="card-img rounded-0" src="<?=assets("landing")?>/img/blog/thumb/thumb1.png" alt="">
                        <ul class="thumb-info">
                          <li><a href="#">Adam Colinge</a></li>
                          <li><a href="#">Dec 15</a></li>
                        </ul>
                      </div>
                      <div class="details mt-20">
                        <a href="blog-single.html">
                          <h6>Accused of assaulting flight attendant miktake alaways</h6>
                        </a>
                      </div>
                    </div>
                    <div class="single-post-list">
                      <div class="thumb">
                        <img class="card-img rounded-0" src="<?=assets("landing")?>/img/blog/thumb/thumb2.png" alt="">
                        <ul class="thumb-info">
                          <li><a href="#">Adam Colinge</a></li>
                          <li><a href="#">Dec 15</a></li>
                        </ul>
                      </div>
                      <div class="details mt-20">
                        <a href="blog-single.html">
                          <h6>Tennessee outback steakhouse the
                            worker diagnosed</h6>
                        </a>
                      </div>
                    </div>
                    <div class="single-post-list">
                      <div class="thumb">
                        <img class="card-img rounded-0" src="<?=assets("landing")?>/img/blog/thumb/thumb3.png" alt="">
                        <ul class="thumb-info">
                          <li><a href="#">Adam Colinge</a></li>
                          <li><a href="#">Dec 15</a></li>
                        </ul>
                      </div>
                      <div class="details mt-20">
                        <a href="blog-single.html">
                          <h6>Tennessee outback steakhouse the
                            worker diagnosed</h6>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>

                  <div class="single-sidebar-widget tag_cloud_widget">
                    <h4 class="single-sidebar-widget__title">Popular Post</h4>
                    <ul class="list">
                      <li>
                          <a href="#">project</a>
                      </li>
                      <li>
                          <a href="#">love</a>
                      </li>
                      <li>
                          <a href="#">technology</a>
                      </li>
                      <li>
                          <a href="#">travel</a>
                      </li>
                      <li>
                          <a href="#">software</a>
                      </li>
                      <li>
                          <a href="#">life style</a>
                      </li>
                      <li>
                          <a href="#">design</a>
                      </li>
                      <li>
                          <a href="#">illustration</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          <!-- End Blog Post Siddebar -->
        </div>
    </section>
    <!--================ End Blog Post Area =================-->
  </main>

  <!--================ Start Footer Area =================-->
  <footer class="footer-area section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-3  col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>About Us</h6>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore
              magna aliqua.
            </p>
          </div>
        </div>
        <div class="col-lg-4  col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>Newsletter</h6>
            <p>Stay update with our latest</p>
            <div class="" id="mc_embed_signup">

              <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                method="get" class="form-inline">

                <div class="d-flex flex-row">

                  <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
                    required="" type="email">


                  <button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
                  <div style="position: absolute; left: -5000px;">
                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                  </div>

                  <!-- <div class="col-lg-4 col-md-4">
                        <button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
                      </div>  -->
                </div>
                <div class="info"></div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-3  col-md-6 col-sm-6">
          <div class="single-footer-widget mail-chimp">
            <h6 class="mb-20">Instragram Feed</h6>
            <ul class="instafeed d-flex flex-wrap">
              <!--
                <li><img src="<?=assets("landing")?>/img/instagram/i1.jpg" alt=""></li>
              <li><img src="<?=assets("landing")?>/img/instagram/i2.jpg" alt=""></li>
              <li><img src="<?=assets("landing")?>/img/instagram/i3.jpg" alt=""></li>
              <li><img src="<?=assets("landing")?>/img/instagram/i4.jpg" alt=""></li>
              <li><img src="<?=assets("landing")?>/img/instagram/i5.jpg" alt=""></li>
              <li><img src="<?=assets("landing")?>/img/instagram/i6.jpg" alt=""></li>
              <li><img src="<?=assets("landing")?>/img/instagram/i7.jpg" alt=""></li>
              <li><img src="<?=assets("landing")?>/img/instagram/i8.jpg" alt=""></li>
              -->
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>Follow Us</h6>
            <p>Let us be social</p>
            <div class="footer-social d-flex align-items-center">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-dribbble"></i>
              </a>
              <a href="#">
                <i class="fab fa-behance"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
        <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
      </div>
    </div>
  </footer>
  <!--================ End Footer Area =================-->

  <script src="<?=assets("landing")?>/vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="<?=assets("landing")?>/vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="<?=assets("landing")?>/vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="<?=assets("landing")?>/js/jquery.ajaxchimp.min.js"></script>
  <script src="<?=assets("landing")?>/js/mail-script.js"></script>
  <script src="<?=assets("landing")?>/js/main.js"></script>
</body>
</html>

<script>
    function changeImg($img){
        let imageUrl = $img; // Dynamic image URL
        document.querySelector('.hero-banner').style.background = `url("${imageUrl}") left center no-repeat`;
        document.querySelector('.hero-banner').style.backgroundSize = 'cover';

    }

    const elements = document.querySelectorAll('.ximg');

    elements.forEach(function(element) {
       element.onclick = ()=>{
        $img = element.getAttribute('src');
        console.log($img);
        changeImg($img);
       }
    });
</script>