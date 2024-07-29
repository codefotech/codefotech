<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
          name="viewport">

    <title>Codefotech Website - Index</title>
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

    @yield('header-resources')
</head>

<body>
<input type="hidden" name="_token" value="{{ csrf_token() }}">


@include('frontend.layouts.header')
@include('frontend.layouts.home')
<main id="main">
    @include('frontend.layouts.about')
    @include('frontend.layouts.services')
    @include('frontend.layouts.work')
    @include('frontend.layouts.plan')
    @include('frontend.layouts.faq')
    @include('frontend.layouts.testimonials')
    @include('frontend.layouts.team')
    @include('frontend.layouts.clients')
    @include('frontend.layouts.blogs')
    @include('frontend.layouts.quote')
</main>
@include('frontend.layouts.footer')


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>


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
<script
    src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/contains.js') }}"></script>
<script
    src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/getBoundingClientRect.js') }}"></script>
<script
    src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/getClippingRect.js') }}"></script>
<script
    src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/getCompositeRect.js') }}"></script>
<script
    src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/getComputedStyle.js') }}"></script>
<script
    src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/getDocumentElement.js') }}"></script>
<script
    src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/getDocumentRect.js') }}"></script>
<script
    src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/getHTMLElementScroll.js') }}"></script>
<script
    src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/getLayoutRect.js') }}"></script>
<script
    src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/getNodeName.js') }}"></script>
<script
    src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/getNodeScroll.js') }}"></script>
<script
    src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/getOffsetParent.js') }}"></script>
<script
    src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/getParentNode.js') }}"></script>
<script
    src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/getScrollParent.js') }}"></script>
<script
    src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/getViewportRect.js') }}"></script>
<script
    src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/getWindow.js') }}"></script>
<script
    src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/getWindowScroll.js') }}"></script>
<script
    src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/getWindowScrollBarX.js') }}"></script>
<script
    src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/instanceOf.js') }}"></script>
<script
    src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/listScrollParents.js') }}"></script>
<script
    src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/isTableElement.js') }}"></script>
<script
    src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/dom_utils/listScrollParents.js') }}"></script>
<script
    src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/modifiers/applyStyles.js') }}"></script>
<script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/modifiers/arrow.js') }}"></script>
<script
    src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/modifiers/computeStyles.js') }}"></script>
<script
    src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/modifiers/eventListeners.js') }}"></script>
<script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/modifiers/flip.js') }}"></script>
<script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/modifiers/hide.js') }}"></script>
<script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/modifiers/offset.js') }}"></script>
<script
    src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/modifiers/preventOverflow.js') }}"></script>
<script
    src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/utils/computeAutoPlacement.js') }}"></script>
<script
    src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/utils/computeOffsets.js') }}"></script>
<script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/utils/debounce.js') }}"></script>
<script
    src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/utils/detectOverflow.js') }}"></script>
<script
    src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/utils/expandToHashMap.js') }}"></script>
<script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/utils/getAltAxis.js') }}"></script>
<script
    src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/utils/getBasePlacement.js') }}"></script>
<script
    src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/utils/getFreshSideObject.js') }}"></script>
<script
    src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/utils/getMainAxisFromPlacement.js') }}"></script>
<script
    src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/utils/getOppositePlacement.js') }}"></script>
<script
    src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/utils/getOppositeVariationPlacement.js') }}"></script>
<script
    src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/utils/getVariation.js') }}"></script>
<script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/utils/math.js') }}"></script>
<script src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/utils/mergeByName.js') }}"></script>
<script
    src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/utils/mergePaddingObject.js') }}"></script>
<script
    src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/utils/orderModifiers.js') }}"></script>
<script
    src="{{ asset('assets-1/npm/bootstrap@5.0.0/node_modules/@popperjs/core/lib/utils/rectToClientRect.js') }}"></script>
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

@yield('footer-script')

</body>

</html>
