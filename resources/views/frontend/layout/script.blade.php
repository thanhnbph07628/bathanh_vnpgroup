<script src="{{asset('script/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('script/owl.carousel.min.js')}}"></script>
<script src="{{asset('script/script.js')}}"></script>
<script src="{{asset('script/bootstrap.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('.recruitment .owl-carousel').owlCarousel({
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
            margin: 30,
            autoplay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                768: {
                    items: 2,
                    nav: true,
                    loop: false
                }
            }
        });
        var scrollTrigger = 200,
            /* px*/
            backToTop = function() {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $('header').addClass('fixed-header');
                } else {
                    $('header').removeClass('fixed-header');
                }
            };
        $(window).on('scroll', function() {
            backToTop();
        });
        $('.list i').on('click', function() {
            $('.menu-mobile').toggle('slow');
        })
        $( "#recruitment" ).click(function() {
            $( ".form-recruitment" ).toggle(500);
        });
    })
    </script>