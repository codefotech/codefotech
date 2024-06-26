<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Codefotech Website - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets-2/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets-2/img/CodeFoTech-1.png') }}" rel="Codefotech">


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets-2/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets-2/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets-2/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets-2/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets-2/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets-2/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets-2/css/style.css') }}" rel="stylesheet">

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

  <!-- ======= Home Section ======= -->
  <section id="home" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">We offer modern solutions for growing your business</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">We are team of talented designers making websites with Bootstrap</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Get Started</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{ asset('assets-2/img/hero-img.png') }}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section>
  <!-- Home Section End -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about container-fluid pt-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-7">
            <div class="section-title-2 position-relative pb-3 mb-5">
              <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
              <h1 class="mb-0">The Best IT Solution With 10 Years of Experience</h1>
            </div>
            <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet
              diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita
              duo justo et tempor eirmod magna dolore erat amet</p>
            <div class="border rounded p-4 wow fadeInUp" data-wow-delay="0.6s">
              <nav>
                <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                  <button class="nav-link text-uppercase active" id="nav-story-tab" data-bs-toggle="tab"
                          data-bs-target="#nav-story" type="button" role="tab" aria-controls="nav-story"
                          aria-selected="true">Story
                  </button>

                  <button class="nav-link text-uppercase" id="nav-reviews-tab" data-bs-toggle="tab"
                          data-bs-target="#nav-review" type="button" role="tab" aria-controls="nav-review"
                          aria-selected="false">Review
                  </button>
                </div>
              </nav>

              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-story" role="tabpanel"
                     aria-labelledby="nav-story-tab">
                  <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet
                    diam et eos labore. Clita erat ipsum et lorem et sit</p>
                  <div class="row g-3">
                    <div class="col-sm-6">
                      <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Award Winning</h5>
                      <h5 class="mb-0"><i class="fa fa-check text-primary me-3"></i>Professional Staff
                      </h5>
                    </div>
                    <div class="col-sm-6">
                      <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>24/7 Support</h5>
                      <h5 class="mb-0"><i class="fa fa-check text-primary me-3"></i>Fair Prices</h5>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="nav-reviews" role="tabpanel" aria-labelledby="nav-reviews-tab">
                  <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet
                    diam et eos labore. Clita erat ipsum et lorem et sit</p>
                  <div class="row g-3">
                    <div class="col-sm-6">
                      <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Award Winning</h5>
                      <h5 class="mb-0"><i class="fa fa-check text-primary me-3"></i>Professional Staff
                      </h5>
                    </div>
                    <div class="col-sm-6">
                      <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>24/7 Support</h5>
                      <h5 class="mb-0"><i class="fa fa-check text-primary me-3"></i>Fair Prices</h5>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="col-lg-5" style="min-height: 400px;">
            <div class="position-relative h-100">
              <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                   src="{{ asset('assets-1/img/about.jpg') }}" style="object-fit: cover;">
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="container-fluid facts pb-5 pt-lg-0 mt-0 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container py-5 pt-lg-0">
        <div class="row gx-0">
          <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
            <div class="bg-primary d-flex align-items-center justify-content-center p-4" style="height: 150px;">
              <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                   style="width: 60px; height: 60px;">
                <i class="fa fa-users text-primary"></i>
              </div>
              <div class="ps-4">
                <h5 class="text-white mb-0">Happy Clients</h5>
                <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
              </div>
            </div>
          </div>
          <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
            <div class="bg-dark d-flex align-items-center justify-content-center p-4" style="height: 150px;">
              <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                   style="width: 60px; height: 60px;">
                <i class="fa fa-check text-primary"></i>
              </div>
              <div class="ps-4">
                <h5 class="text-white mb-0">Projects Done</h5>
                <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
              </div>
            </div>
          </div>
          <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
            <div class="bg-primary d-flex align-items-center justify-content-center p-4" style="height: 150px;">
              <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                   style="width: 60px; height: 60px;">
                <i class="fa fa-award text-primary"></i>
              </div>
              <div class="ps-4">
                <h5 class="text-white mb-0">Win Awards</h5>
                <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About Section End -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container py-5">
        <div class="row g-5 mb-5">
          <div class="col-lg-5" style="min-height: 400px;">
            <div class="position-relative h-100">
              <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.3s"
                   src="{{ asset('assets-1/img/feature.jpg') }}" style="object-fit: cover;">
            </div>
          </div>
          <div class="col-lg-7">
            <div class="section-title-2 position-relative pb-3 mb-5">
              <h5 class="fw-bold text-primary text-uppercase">Our Services</h5>
              <h1 class="mb-0">Custom IT Solutions for Your Successful Business</h1>
            </div>
            <div class="row g-5">
              <div class="col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                  <div class="service-icon">
                    <i class="fa fa-user-md text-white"></i>
                  </div>
                  <h4 class="mb-3">Cyber Security</h4>
                  <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore
                    sed</p>
                  <a class="btn btn-lg btn-primary rounded" href>
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                  <div class="service-icon">
                    <i class="fa fa-user-md text-white"></i>
                  </div>
                  <h4 class="mb-3">Data Analytics</h4>
                  <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore
                    sed</p>
                  <a class="btn btn-lg btn-primary rounded" href>
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row g-5 wow fadeInUp" data-wow-delay="0.1s">
          <div class="col-lg-7">
            <div class="row g-5">
              <div class="col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                  <div class="service-icon">
                    <i class="fa fa-user-md text-white"></i>
                  </div>
                  <h4 class="mb-3">Web Development</h4>
                  <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore
                    sed</p>
                  <a class="btn btn-lg btn-primary rounded" href>
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                  <div class="service-icon">
                    <i class="fa fa-user-md text-white"></i>
                  </div>
                  <h4 class="mb-3">SEO Optimization</h4>
                  <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore
                    sed</p>
                  <a class="btn btn-lg btn-primary rounded" href>
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 wow zoomIn" data-wow-delay="0.9s">
            <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
              <h3 class="text-white mb-3">Call Us For A Quote</h3>
              <p class="text-white mb-3">Clita ipsum magna kasd rebum at ipsum amet dolor justo dolor est magna
                stet eirmod</p>
              <h2 class="text-white mb-0">+880 1896086540</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section End -->

    <!-- ======= Work Section ======= -->
    <section id="work" class="plan container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container py-5">
        <div class="section-title-2 text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
          <h5 class="fw-bold text-primary text-uppercase">Work Process</h5>
          <h1 class="mb-0">Step By Step Simple & Clean Working Process</h1>
        </div>
        <div class="row g-5">
          <div class="col-lg-3 col-md-6 process-item wow slideInUp" data-wow-delay="0.2s">
            <div class="position-relative d-flex flex-column align-items-center text-center">
              <div class="process-icon bg-primary rounded d-flex align-items-center justify-content-center mb-4">
                <i class="fa fa-search fa-2x text-white"></i>
              </div>
              <h3>Research</h3>
              <p class="mb-0">Eos vero dolore eirmod diam duo lorem magna sit sea dolore sanctus sed et</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 process-item wow slideInUp" data-wow-delay="0.4s">
            <div class="position-relative d-flex flex-column align-items-center text-center">
              <div class="process-icon bg-primary rounded d-flex align-items-center justify-content-center mb-4">
                <i class="fa fa-sitemap fa-2x text-white"></i>
              </div>
              <h3>Concept</h3>
              <p class="mb-0">Eos vero dolore eirmod diam duo lorem magna sit sea dolore sanctus sed et</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 process-item wow slideInUp" data-wow-delay="0.6s">
            <div class="position-relative d-flex flex-column align-items-center text-center">
              <div class="process-icon bg-primary rounded d-flex align-items-center justify-content-center mb-4">
                <i class="fa fa-code fa-2x text-white"></i>
              </div>
              <h3>Development</h3>
              <p class="mb-0">Eos vero dolore eirmod diam duo lorem magna sit sea dolore sanctus sed et</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 process-item wow slideInUp" data-wow-delay="0.8s">
            <div class="position-relative d-flex flex-column align-items-center text-center">
              <div class="process-icon bg-primary rounded d-flex align-items-center justify-content-center mb-4">
                <i class="fa fa-check fa-2x text-white"></i>
              </div>
              <h3>Finalization</h3>
              <p class="mb-0">Eos vero dolore eirmod diam duo lorem magna sit sea dolore sanctus sed et</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Work Section End -->

    <!-- ======= Plan Section ======= -->
    <section id="plan" class="plan container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container py-5">
        <div class="section-title-2 text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
          <h5 class="fw-bold text-primary text-uppercase">Pricing Plans</h5>
          <h1 class="mb-0">We are Offering Competitive Prices for Our Clients</h1>
        </div>
        <div class="row g-0">
          <div class="col-lg-12">
            <div class="table-responsive wow fadeInUp" data-wow-delay="0.3s">
              <table class="price-table table align-middle table-hover mb-0">
                <thead class="table-light align-top">
                <tr>
                  <th>
                    <h4 class="text-primary mb-1">Features</h4>
                    <small class="text-uppercase fw-normal text-body">List of Features</small>
                  </th>
                  <th class>
                    <h4 class="text-primary mb-1">Basic</h4>
                    <small class="text-uppercase fw-normal text-body">For Small Size Business</small>
                    <h4 class="mt-2 mb-0">Free</h4>
                  </th>
                  <th class>
                    <h4 class="text-primary mb-1">Standard</h4>
                    <small class="text-uppercase fw-normal text-body">For Medium Size Business</small>
                    <h4 class="mt-2 mb-0">$49.00 / mo</h4>
                  </th>
                  <th class>
                    <h4 class="text-primary mb-1">Advanced</h4>
                    <small class="text-uppercase fw-normal text-body">For Large Size Business</small>
                    <h4 class="mt-2 mb-0">$99.00 / mo</h4>
                  </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1. HTML5 & CSS3</td>
                  <td><i class="fa fa-check text-primary"></i></td>
                  <td><i class="fa fa-check text-primary"></i></td>
                  <td><i class="fa fa-check text-primary"></i></td>
                </tr>
                <tr>
                  <td>2. Bootstrap v5</td>
                  <td><i class="fa fa-check text-primary"></i></td>
                  <td><i class="fa fa-check text-primary"></i></td>
                  <td><i class="fa fa-check text-primary"></i></td>
                </tr>
                <tr>
                  <td>3. Responsive Layout</td>
                  <td><i class="fa fa-check text-primary"></i></td>
                  <td><i class="fa fa-check text-primary"></i></td>
                  <td><i class="fa fa-check text-primary"></i></td>
                </tr>
                <tr>
                  <td>4. Cross-browser Support</td>
                  <td><i class="fa fa-times text-danger"></i></td>
                  <td><i class="fa fa-check text-primary"></i></td>
                  <td><i class="fa fa-check text-primary"></i></td>
                </tr>
                <tr>
                  <td>5. Support with Email</td>
                  <td><i class="fa fa-times text-danger"></i></td>
                  <td><i class="fa fa-times text-danger"></i></td>
                  <td><i class="fa fa-check text-primary"></i></td>
                </tr>
                </tbody>
                <tfoot style="border-color: #FFFFFF;">
                <tr>
                  <th></th>
                  <th><a href class="btn btn-primary py-2 px-4">Sign Up</a></th>
                  <th><a href class="btn btn-primary py-2 px-4">Order Now</a></th>
                  <th><a href class="btn btn-primary py-2 px-4">Order Now</a></th>
                </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Plan Section End -->

    <!-- ======= FAQ Section ======= -->
    <section id="faq" class="faq container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-6">
            <div class="section-title-2 position-relative pb-3 mb-5">
              <h5 class="fw-bold text-primary text-uppercase">General FAQs</h5>
              <h1 class="mb-0">Any Question? Check the FAQs or Contact Us</h1>
            </div>
            <p class="mb-4">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et
              dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et
              dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus
              sed et. Takimata takimata sanctus sed.</p>
            <a href class="btn btn-primary py-3 px-5 me-3">Explore More FAQs</a>
          </div>
          <div class="col-lg-6">
            <div class="accordion accordion-custom" id="accordionExample">
              <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button fw-semi-bold" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    How to build a website?
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                     data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam
                    aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                  </div>
                </div>
              </div>
              <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed fw-semi-bold" type="button"
                          data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                          aria-controls="collapseTwo">
                    How long will it take to get a new website?
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                     data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam
                    aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                  </div>
                </div>
              </div>
              <div class="accordion-item wow fadeInUp" data-wow-delay="0.3s">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed fw-semi-bold" type="button"
                          data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                          aria-controls="collapseThree">
                    Do you only create HTML websites?
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                     data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam
                    aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                  </div>
                </div>
              </div>
              <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button collapsed fw-semi-bold" type="button"
                          data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true"
                          aria-controls="collapseFour">
                    Will my website be mobile-friendly?
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                     data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam
                    aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                  </div>
                </div>
              </div>
              <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                <h2 class="accordion-header" id="headingFive">
                  <button class="accordion-button collapsed fw-semi-bold" type="button"
                          data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                          aria-controls="collapseFive">
                    Will you maintain my site for me?
                  </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                     data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam
                    aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- FAQ Section End -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Testimonials</h2>
          <p>What they are saying about us</p>
        </header>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                </p>
                <div class="profile mt-auto">
                  <img src="{{ asset('assets-2/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                </p>
                <div class="profile mt-auto">
                  <img src="{{ asset('assets-2/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                </p>
                <div class="profile mt-auto">
                  <img src="{{ asset('assets-2/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                </p>
                <div class="profile mt-auto">
                  <img src="{{ asset('assets-2/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                </p>
                <div class="profile mt-auto">
                  <img src="{{ asset('assets-2/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section>
    <!-- Testimonials Section End -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Team</h2>
          <p>Our hard working team</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('assets-2/img/team/team-1.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('assets-2/img/team/team-2.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('assets-2/img/team/team-3.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut architecto porro aspernatur molestiae modi.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('assets-2/img/team/team-4.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <p>Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut aliquid doloremque ut possimus ipsum officia.</p>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section>
    <!-- Team Section End -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Our Clients</h2>
          <p>Temporibus omnis officia</p>
        </header>

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="{{ asset('assets-2/img/clients/client-1.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('assets-2/img/clients/client-2.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('assets-2/img/clients/client-3.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('assets-2/img/clients/client-4.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('assets-2/img/clients/client-5.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('assets-2/img/clients/client-6.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('assets-2/img/clients/client-7.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('assets-2/img/clients/client-8.png') }}" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

    </section>
    <!-- Clients Section End -->

    <!-- ======= Blogs Section ======= -->
    <section id="blogs" class="blogs container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container py-5">
        <div class="section-title-2 text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
          <h5 class="fw-bold text-primary text-uppercase">Latest Blog</h5>
          <h1 class="mb-0">Read The Latest Articles from Our Blog Post</h1>
        </div>
        <div class="row g-5">
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
            <div class="blog-item bg-light rounded overflow-hidden">
              <div class="blog-img position-relative overflow-hidden">
                <img class="img-fluid w-100" src="{{ asset('assets-1/img/blog-1.jpg') }}" alt>
                <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                   href>Web Design</a>
              </div>
              <div class="p-4">
                <div class="d-flex mb-3">
                  <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                  <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                </div>
                <h4 class="mb-3">How to build a website</h4>
                <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                <a class="text-uppercase" href>Read More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
            <div class="blog-item bg-light rounded overflow-hidden">
              <div class="blog-img position-relative overflow-hidden">
                <img class="img-fluid w-100" src="{{ asset('assets-1/img/blog-2.jpg') }}" alt>
                <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                   href>Web Design</a>
              </div>
              <div class="p-4">
                <div class="d-flex mb-3">
                  <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                  <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                </div>
                <h4 class="mb-3">How to build a website</h4>
                <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                <a class="text-uppercase" href>Read More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
            <div class="blog-item bg-light rounded overflow-hidden">
              <div class="blog-img position-relative overflow-hidden">
                <img class="img-fluid w-100" src="{{ asset('assets-1/img/blog-3.jpg') }}" alt>
                <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                   href>Web Design</a>
              </div>
              <div class="p-4">
                <div class="d-flex mb-3">
                  <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                  <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                </div>
                <h4 class="mb-3">How to build a website</h4>
                <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                <a class="text-uppercase" href>Read More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Blog Section End -->

    <!-- ======= Quote Section ======= -->
    <section id="quote" class="quote container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-7">
            <div class="section-title-2 position-relative pb-3 mb-5">
              <h5 class="fw-bold text-primary text-uppercase">Request A Quote</h5>
              <h1 class="mb-0">Need A Free Quote? Please Feel Free to Contact Us</h1>
            </div>
            <div class="row gx-3">
              <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Reply within 24 hours</h5>
              </div>
              <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>24 hrs telephone support</h5>
              </div>
            </div>
            <p class="mb-4">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et
              dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et
              dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus
              sed et. Takimata takimata sanctus sed.</p>
            <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
              <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                   style="width: 60px; height: 60px;">
                <i class="fa fa-phone-alt text-white"></i>
              </div>
              <div class="ps-4">
                <h5 class="mb-2">Call to ask any question</h5>
                <h4 class="text-primary mb-0">+880 1896086540</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
              <form>
                <div class="row g-3">
                  <div class="col-xl-12">
                    <input type="text" class="form-control bg-light border-0" placeholder="Your Name"
                           style="height: 55px;">
                  </div>
                  <div class="col-12">
                    <input type="email" class="form-control bg-light border-0" placeholder="Your Email"
                           style="height: 55px;">
                  </div>
                  <div class="col-12">
                    <select class="form-select bg-light border-0" style="height: 55px;">
                      <option selected>Select A Service</option>
                      <option value="1">Service 1</option>
                      <option value="2">Service 2</option>
                      <option value="3">Service 3</option>
                    </select>
                  </div>
                  <div class="col-12">
                                <textarea class="form-control bg-light border-0" rows="3"
                                          placeholder="Message"></textarea>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-dark w-100 py-3" type="submit">Request A Quote</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Quote Section End -->


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





  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>




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

</body>

</html>
