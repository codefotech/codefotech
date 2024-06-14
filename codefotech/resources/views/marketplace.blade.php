<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Codefotech Website - Marketplace</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

<!-- Favicons -->
<link href="{{ asset('assets-2/img/favicon.png') }}" rel="icon">
<link href="{{ asset('assets-2/img/CodeFoTech-1.png') }}" rel="Codefotech">


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
    rel="stylesheet">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="{{ asset('assets-1/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-1/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-1/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets-1/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets-1/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-1/css/custom.css') }}" rel="stylesheet">


  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
    <link href="{{ asset('assets-2/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-2/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-2/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-2/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-2/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-2/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
    <link href="{{ asset('assets-2/css/style.css') }}" rel="stylesheet">
<!--  <link href="assets-1/css/custom.css" rel="stylesheet">-->


<!--  &lt;!&ndash; Font Awesome Icons &ndash;&gt;-->
<!--  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">-->
<!--  &lt;!&ndash; IonIcons &ndash;&gt;-->
<!--  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">-->
<!--  &lt;!&ndash; Theme style &ndash;&gt;-->
<!--  <link rel="stylesheet" href="dist/css/adminlte.min.css">-->

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="#" class="logo d-flex align-items-center">
            <!-- <img src="{{ asset('assets-2/img/logo.png') }}" alt="">
        <span>FlexStart</span> -->

            <img src="{{ asset('assets-2/img/CodeFoTech-1.png') }}" alt="Codefotech">
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#home">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#services">Services</a></li>
                <li><a class="nav-link scrollto" href="{{ url('/marketplace') }}">Marketplace</a></li>
                <li><a class="nav-link scrollto" href="blog.html">Blog</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->



  <main id="main">

    <!-- ======= Searchbar ======= -->
    <section class="header-searchbar">
      <div class="searchbar">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
              <h4>Codefotech Template Marketplace</h4>
              <p>Find everything your website needs</p>
            </div>
            <div class="col-lg-6">
              <form action="" method="post">
                <input type="search" name="search"><input type="button" value="Search">
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Searchbar -->

    <section class="menu border p-0">
      <div class="container">

        <div class="row">
          <nav id="navbar" class="navbar justify-content-center">
            <ul class="">
              <li><a class="nav-link scrollto active" href="#theme">Theme</a></li>
              <li><a class="nav-link scrollto" href="#modules">Modules</a></li>
              <li><a class="nav-link scrollto" href="#website">Website Template</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
        </div>

      </div>
    </section>




<!-- ======= Inner Page ======= -->
<section class="inner-page">
  <div class="container">
    <!-- --------------------------------------------------------------------- -->
    <div class="row">
      <div class="col-lg-3">
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
              data-accordion="false">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <p>
                    Category
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <label for="blog">
                        <input type="checkbox" name="blog" id="blog">
                        <span class="pl-2">Blog</span>
                      </label>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <label for="body-content">
                        <input type="checkbox" name="body-content" id="body-content">
                        <span class="pl-2">Body Content</span>
                      </label>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <label for="e-commerce">
                        <input type="checkbox" name="e-commerce" id="e-commerce">
                        <span class="pl-2">E-commerce</span>
                      </label>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <label for="design">
                        <input type="checkbox" name="design" id="design">
                        <span class="pl-2">Design</span>
                      </label>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <label for="form">
                        <input type="checkbox" name="form" id="form">
                        <span class="pl-2">Form</span>
                      </label>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <p>
                    Support
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <div class="nav-link">
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <div class="input-group-append">
                          <button class="btn btn-primary codefotech_color" type="button"><i class="fas fa-search"></i></button>
                        </div>
                      </div>
                    </div>

                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <label for="body-content">
                        <input type="checkbox" name="body-content" id="body-content">
                        <span class="pl-2">Provides Free Support</span>
                      </label>
                    </a>
                </ul>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </div>
      <div class="col-lg-9">
        <div class="card row py-3 justify-content-center align-content-center">
          <div class="row rounded-3">
            <div class="col-lg-4 rounded" style="background-image: url('assets-1/img/Timeline with Scrolling Animation v5-2-1.webp'); background-repeat: no-repeat; background-position: center; background-size: cover;">

            </div>

            <div class="col-lg-4 justify-content-center align-content-center">
              <div class="pl-2">
                <h4 class="m-auto">Gamers Arena</h4>
                <p class="m-auto py-1">in Mobile</p>
                <br>
                <p class="fw-bold m-auto">Software Version : <span class="fw-normal">Flutter 3.x</span></p>
                <p class="fw-bold m-auto">Files Included : <span class="fw-normal">Dart</span></p>
              </div>
            </div>
            <div class="col-lg-4 justify-content-center align-content-center text-center">
              <div class="col-lg-12">
                <h4>25 ৳</h4>
                <p class="fw-bold"><span>6</span> sales</p>
                <p>Last updated:<span>19 May 2024</span></p>

                <div class="text-center">
                  <a href="marketplace_details.html" class="btn btn-primary codefotech_color">
                    <i class="fas fa-shopping-cart"></i>
                  </a>
                  <a href="marketplace_details.html" class="btn btn-primary codefotech_color">
                    Details
                  </a>
                  <a href="#" class="btn btn-outline-primary btn-outline-codefotech">
                    Preview
                  </a>
                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="card row py-3 justify-content-center align-content-center">
          <div class="row rounded-3">
            <div class="col-lg-4 rounded" style="background-image: url('{{ asset('assets-1/img/faq_listing-1.webp') }}'); background-repeat: no-repeat; background-position: center; background-size: cover;">

            </div>

            <div class="col-lg-4 justify-content-center align-content-center">
              <div class="pl-2">
                <h4 class="m-auto">Gamers Arena</h4>
                <p class="m-auto py-1">in Mobile</p>
                <br>
                <p class="fw-bold m-auto">Software Version : <span class="fw-normal">Flutter 3.x</span></p>
                <p class="fw-bold m-auto">Files Included : <span class="fw-normal">Dart</span></p>
              </div>
            </div>
            <div class="col-lg-4 justify-content-center align-content-center text-center">
              <div class="col-lg-12">
                <h4>25 ৳</h4>
                <p class="fw-bold"><span>6</span> sales</p>
                <p>Last updated:<span>19 May 2024</span></p>

                <div class="text-center">
                  <a href="marketplace_details.html" class="btn btn-primary codefotech_color">
                    <i class="fas fa-shopping-cart"></i>
                  </a>
                  <a href="marketplace_details.html" class="btn btn-primary codefotech_color">
                    Details
                  </a>
                  <a href="#" class="btn btn-outline-primary btn-outline-codefotech">
                    Preview
                  </a>
                </div>

              </div>
            </div>
          </div>
        </div>


<!--        <div class="card">-->
<!--          <div class="row">-->
<!--            <div class="col-lg-4">-->
<!--              <img src="./assets-1/img/faq_listing-1.webp" class="h-100" width="100%" alt="">-->
<!--            </div>-->
<!--            <div class="col-lg-4">-->
<!--              <h4 class="m-auto">FAQ</h4>-->
<!--              <p class="m-auto py-1">By MakeWebBetter</p>-->
<!--              <div class="m-auto pb-1"><span class="badge badge-dark border">MODULE</span></div>-->
<!--              <ul>-->
<!--                <li>Customizable Colors & Styles For Accordion & Text</li>-->
<!--                <li>Search Functionality To Easily Find Specific Questions Or Keywords</li>-->
<!--                <li>Responsive Design and Clean UI.</li>-->
<!--              </ul>-->
<!--            </div>-->
<!--            <div class="col-lg-4 row text-center align-items-center justify-content-center">-->
<!--              <div class="col-lg-12">-->
<!--                <h4>Free</h4>-->
<!--                <div class="row">-->
<!--                  <div class="col-lg-12">-->
<!--                    <i style="color: rgb(245, 194, 107);" class="fas fa-star"></i>-->
<!--                    <i style="color: rgb(245, 194, 107);" class="fas fa-star"></i>-->
<!--                    <i style="color: rgb(245, 194, 107);" class="fas fa-star"></i>-->
<!--                    <i style="color: rgb(245, 194, 107);" class="fas fa-star"></i>-->
<!--                    <i style="color: rgb(245, 194, 107);" class="fas fa-star"></i>-->
<!--                    <span class="pl-2">5/5</span>-->
<!--                    <span class="pl-3">(3)</span>-->
<!--                  </div>-->
<!--                </div>-->
<!--                <p class="m-auto py-1">1,500+ installs</p>-->
<!--                <div class="text-center">-->
<!--                  <a href="marketplace_details.html" class="btn btn-primary codefotech_color mr-2">-->
<!--                    View Details-->
<!--                  </a>-->
<!--                  <a href="#" class="btn btn-outline-primary">-->
<!--                    Preview-->
<!--                  </a>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
      </div>
    </div>
    <!-- --------------------------------------------------------------------- -->
  </div>
</section>
<!-- End Inner Page -->




  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="contact" style="background-color: #0a0915 !important;" class="contact container-fluid text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
      <div class="row gx-5">
        <div class="col-lg-4 col-md-6 footer-about">
          <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary codefotech_color p-4">
            <a href class="navbar-brand">
              <!-- <h1 class="m-0 text-white">
                  Codefotech</h1> -->
              <img src="{{ asset('assets-1/img/CodeFoTech-2.png') }}" alt="Codefotech" style="width: 250px;">
            </a>
            <p class="mt-3 mb-4">Lorem diam sit erat dolor elitr et, diam lorem justo amet clita stet eos sit.
              Elitr dolor duo lorem, elitr clita ipsum sea. Diam amet erat lorem stet eos. Diam amet et kasd
              eos duo.</p>
            <form action>
              <div class="input-group">
                <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                <button class="btn btn-dark">Sign Up</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-8 col-md-6">
          <div class="row gx-5">
            <div class="col-lg-4 col-md-12 pt-5 mb-5">
              <div class="section-title-2 section-title-sm position-relative pb-3 mb-4">
                <h3 class="text-light mb-0">Get In Touch</h3>
              </div>
              <div class="d-flex mb-2">
                <i class="bi bi-geo-alt codefotech_text_color me-2"></i>
                <p class="mb-0">House - 21, Sector -12, Uttara, Dhaka</p>
              </div>
              <div class="d-flex mb-2">
                <i class="bi bi-envelope-open codefotech_text_color me-2"></i>
                <p class="mb-0"><a href="#" class="codefotech_text_color">codefotech@gmail.com</a>
                </p>
              </div>
              <div class="d-flex mb-2">
                <i class="bi bi-telephone codefotech_text_color me-2"></i>
                <p class="mb-0">+880 1896086540</p>
              </div>
              <div class="d-flex mt-4">
                <a class="btn btn-primary codefotech_color btn-square me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                <a class="btn btn-primary codefotech_color btn-square me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                <a class="btn btn-primary codefotech_color btn-square me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                <a class="btn btn-primary codefotech_color btn-square" href="#"><i class="fab fa-instagram fw-normal"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
              <div class="section-title-2 section-title-sm position-relative pb-3 mb-4">
                <h3 class="text-light mb-0">Quick Links</h3>
              </div>
              <div class="link-animated d-flex flex-column justify-content-start">
                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right codefotech_text_color me-2"></i>Home</a>
                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right codefotech_text_color me-2"></i>About
                  Us</a>
                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right codefotech_text_color me-2"></i>Our
                  Services</a>
                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right codefotech_text_color me-2"></i>Meet
                  The Team</a>
                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right codefotech_text_color me-2"></i>Latest
                  Blog</a>
                <a class="text-light" href="#"><i class="bi bi-arrow-right codefotech_text_color me-2"></i>Contact Us</a>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
              <div class="section-title-2 section-title-sm position-relative pb-3 mb-4">
                <h3 class="text-light mb-0">Popular Links</h3>
              </div>
              <div class="link-animated d-flex flex-column justify-content-start">
                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right codefotech_text_color me-2"></i>Home</a>
                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right codefotech_text_color me-2"></i>About
                  Us</a>
                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right codefotech_text_color me-2"></i>Our
                  Services</a>
                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right codefotech_text_color me-2"></i>Meet
                  The Team</a>
                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right codefotech_text_color me-2"></i>Latest
                  Blog</a>
                <a class="text-light" href="#"><i class="bi bi-arrow-right codefotech_text_color me-2"></i>Contact Us</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <div class="container-fluid text-white" style="background: #061429;">
    <div class="container text-center">
      <div class="row justify-content-end">
        <div class="col-lg-8 col-md-6">
          <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
            <p class="mb-0">&copy; <a class="text-white border-bottom" href="codefotech.com">Codefotech</a>. All Rights
              Reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ======= Footer ======= -->




  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>




  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" type="4a94b68b0014e1d7a45d6744-text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
          type="4a94b68b0014e1d7a45d6744-text/javascript"></script>
  <script src="{{ asset('assets-1/lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('assets-1/lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('assets-1/lib/waypoints/waypoints.min.js') }}"></script>
  <script src="{{ asset('assets-1/lib/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('assets-1/lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets-1/lib/isotope/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets-1/lib/lightbox/js/lightbox.min.js') }}"></script>

  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/js/index.umd.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/js/src/alert.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/js/src/base-component.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/js/src/button.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/js/src/carousel.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/js/src/collapse.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/js/src/dom/data.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/js/src/dom/event-handler.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/js/src/dom/manipulator.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/js/src/dom/selector-engine.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/js/src/dropdown.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/js/src/modal.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/js/src/offcanvas.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/js/src/popover.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/js/src/scrollspy.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/js/src/tab.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/js/src/toast.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/js/src/tooltip.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/js/src/util/backdrop.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/js/src/util/index.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/js/src/util/sanitizer.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/js/src/util/scrollbar.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/createPopper.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/popper.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/popper-lite.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/enums.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/contains.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/getBoundingClientRect.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/getClippingRect.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/getCompositeRect.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/getComputedStyle.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/getDocumentElement.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/getDocumentRect.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/getHTMLElementScroll.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/getLayoutRect.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/getNodeName.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/getNodeScroll.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/getOffsetParent.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/getParentNode.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/getScrollParent.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/getViewportRect.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/getWindow.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/getWindowScroll.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/getWindowScrollBarX.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/instanceOf.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/listScrollParents.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/isTableElement.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/listScrollParents.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/modifiers/applyStyles.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/modifiers/arrow.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/modifiers/computeStyles.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/modifiers/eventListeners.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/modifiers/flip.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/modifiers/hide.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/modifiers/offset.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/modifiers/preventOverflow.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/utils/computeAutoPlacement.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/utils/computeOffsets.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/utils/debounce.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/utils/detectOverflow.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/utils/expandToHashMap.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/utils/getAltAxis.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/utils/getBasePlacement.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/utils/getFreshSideObject.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/utils/getMainAxisFromPlacement.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/utils/getOppositePlacement.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/utils/getOppositeVariationPlacement.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/utils/getVariation.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/utils/math.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/utils/mergeByName.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/utils/mergePaddingObject.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/utils/orderModifiers.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/utils/rectToClientRect.js') }}"></script>
  <script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/utils/within.js') }}"></script>

  <script src="{{ asset('assets-1/js/jquery-3.4.1.min.js') }}"></script>
  <script src="{{ asset('assets-1/js/main.js') }}"></script>



  <!-- Vendor JS Files -->
  <script src="{{ asset('assets-2/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets-2/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets-2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets-2/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets-2/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets-2/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets-2/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets-2/js/main.js') }}"></script>
<!--  <script src="{{ asset('assets-1/js/custom.js') }}"></script>-->

<!--  &lt;!&ndash; jQuery &ndash;&gt;-->
  <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!--  &lt;!&ndash; Bootstrap &ndash;&gt;-->
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!--  &lt;!&ndash; AdminLTE &ndash;&gt;-->
  <script src="{{ asset('dist/js/adminlte.js') }}"></script>

<!--  &lt;!&ndash; OPTIONAL SCRIPTS &ndash;&gt;-->
<!--  <script src="plugins/chart.js/Chart.min.js"></script>-->


</body>

</html>
