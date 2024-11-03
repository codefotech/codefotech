<!-- ======= Header Section Start ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{ asset('/') }}" class="logo d-flex align-items-center">
            <!-- <img src="assets-2/img/logo.png" alt="">
            <span>FlexStart</span> -->

            <img src="{{ asset('assets-2/img/CodeFoTech-1.png') }}" alt="Codefotech">
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="{{ route('home') }}">Home</a></li>
                <li><a class="nav-link scrollto" href="{{ route('about') }}">About</a></li>
                <li><a class="nav-link scrollto" href="{{ route('service') }}">Services</a></li>
                <li><a class="nav-link scrollto" href="{{ route('product') }}">Products</a></li>
                <li><a class="nav-link scrollto" href="marketplace.html">Marketplace</a></li>
                <li><a class="nav-link scrollto" href="{{ route('blog') }}">Blog</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

    </div>
</header>
<!-- ======== Header Section End ======== -->
