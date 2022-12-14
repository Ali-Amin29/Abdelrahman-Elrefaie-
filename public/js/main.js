(function ($) {
    "use strict";

    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        return false;
    });


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('.navbar').addClass('nav-sticky');
        } else {
            $('.navbar').removeClass('nav-sticky');
        }
    });


    // Dropdown on mouse hover
    $(document).ready(function () {
        function toggleNavbarMethod() {
            if ($(window).width() > 992) {
                $('.navbar .dropdown').on('mouseover', function () {
                    $('.dropdown-toggle', this).trigger('click');
                }).on('mouseout', function () {
                    $('.dropdown-toggle', this).trigger('click').blur();
                });
            } else {
                $('.navbar .dropdown').off('mouseover').off('mouseout');
            }
        }
        toggleNavbarMethod();
        $(window).resize(toggleNavbarMethod);
    });


    // Main carousel
    $(".carousel .owl-carousel").owlCarousel({
        autoplay: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        items: 1,
        smartSpeed: 300,
        dots: false,
        loop: true,
        nav: true,
        rtl: true,
        navText: [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ]
    });

    // Modal Video

    // $(document).ready(function () {
    //     var $videoSrc;
    //     $('.btn-play').click(function () {
    //         $videoSrc = $(this).data("src");
    //     });
    //     console.log($videoSrc);

    //     $('#videoModal').on('shown.bs.modal', function (e) {
    //         $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
    //     })

    //     $('#videoModal').on('hide.bs.modal', function (e) {
    //         $("#video").attr('src', $videoSrc);
    //     })
    // });

    $(document).ready(function () {
        var $videoSrc;
        $('.btn-play').click(function () {
            $videoSrc = $(this).data("src");
        });

        $('#videoModal').on('shown.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
        })

        $('#videoModal').on('hide.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc);
        })
    });

    // jQuery counterUp
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Testimonials carousel
    $(".testimonials-carousel").owlCarousel({
        autoplay: true,
        animateIn: 'slideInDown',
        animateOut: 'slideOutDown',
        items: 1,
        smartSpeed: 450,
        dots: false,
        loop: true,
        nav: true,
        rtl: true,
        navText: [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ],
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            }
        }
    });


    // Blogs carousel
    $(".blog-carousel").owlCarousel({
        autoplay: true,
        dots: false,
        loop: true,
        nav: true,
        rtl: true,
        navText: [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ],
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 2
            }
        }
    });



    // Gets the video src from the data-src on each button
    var $videoSrc;
    $('.video-btn').click(function () {
        $videoSrc = $(this).data("src");
    });

    // when the modal is opened autoplay it
    $('#myModal').on('shown.bs.modal', function (e) {
        // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
        $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
    })

    // stop playing the youtube video when I close the modal
    $('#myModal').on('hide.bs.modal', function (e) {
        // a poor man's stop video
        $("#video").attr('src', $videoSrc);
    })

    $('select').on('change', function () {
        if (this.value == 'الهاتف') {
            var time = document.getElementById("time");
            time.classList.remove("d-none");
        } else if (this.value == 'بريد' || this.value == 'سريع') {
            var time = document.getElementById("time");
            time.classList.add("d-none");
        }
    });

    var loyar = document.querySelectorAll('#loyar')
    var loyar2 = document.querySelectorAll('#loyar2')
    var time = document.getElementById("time");
    var timecount = document.getElementById("timecount")

    loyar.forEach(function(i) {
        i.addEventListener("click", function(e) {
            var selectedprice = e.target.value;
            document.getElementById('price').innerHTML = "Total Price: " + selectedprice
            document.getElementById('price').value = selectedprice
            document.getElementById('price2').value = selectedprice
            time.classList.remove("d-none");
        })
    })

    loyar2.forEach(function(i) {
        i.addEventListener("click", function(e) {
            var selectedprice = e.target.value;
            document.getElementById('price').innerHTML = "Total Price: " + selectedprice
            document.getElementById('price').value = selectedprice
            document.getElementById('price2').value = selectedprice

        })
    })

    timecount.addEventListener("change", function(e) {
        var price = document.getElementById("price");
        var total = 0;
        total = parseInt(price.value) + parseInt(timecount.value)
        if (timecount.value > 3) {
            document.getElementById('price').innerHTML = "Total Price: " + total
            document.getElementById('price2').value = total
        } else if (timecount.value < 3) {
            document.getElementById('price').innerHTML = "Total Price: " + price.value * timecount.value
            document.getElementById('price2').value = price.value * timecount.value

        } else if (timecount.value == null) {
            document.getElementById('price').innerHTML = "Total Price: " + timecount.value
            document.getElementById('price2').value = total
        }
    })

})(jQuery);

