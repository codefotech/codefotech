// custom.js

// jQuery for smooth scrolling
$(document).ready(function () {
    $("a.scrollto").on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function () {
                window.location.hash = hash;
            });
        }
    });
});

// jQuery for mobile navbar toggle
$(document).ready(function () {
    $('.mobile-nav-toggle').click(function () {
        $('#navbar ul').toggleClass('active');
    });
});
