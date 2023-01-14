<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {!! SEO::generate() !!}
    <link rel="canonical" href="{{ request()->url() }}" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body>
    @php
        $facebook = setting('facebook');
        $twitter = setting('twitter');
        $linkedin = setting('linkedin');
        $instagram = setting('instagram');
    @endphp
    {{-- header --}}
    @include('layouts.header')

    {{-- main content start --}}
    @yield('content')
    {{-- main content end --}}

    <section class="bg-custom text-center p-5">
        <h2>Let us together build a flourishing business</h2>
        <p class="mb-0">When you are connected with Xorexs, you aren’t growing your business alone. We are at your
            back
            and will do our
            best to keep you growing your business along with the entire team and the organization. So if you are
            looking
            for the right organization that can build an upright online presence and bring in more conversions and
            revenue;
            we are right here to serve you at our best.
        </p>
    </section>

    {{-- footer --}}
    @include('layouts.footer')


    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg>
    </div>

    <script src="https://kit.fontawesome.com/2cf4d7f403.js" crossorigin="anonymous"></script>
    {{-- <script src="{{ asset('js/jquery.min.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    {{-- <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.1/jquery-migrate.min.js"></script>
    {{-- <script src="{{ asset('js/popper.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/bootstrap.min.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    {{-- <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script> --}}
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    {{-- <script src="{{ asset('js/owl.carousel.min.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.1/owl.carousel.min.js"></script>
    {{-- <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    {{-- <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-animateNumber/0.0.14/jquery.animateNumber.min.js"></script>
    <script src="{{ asset('js/scrollax.min.js') }}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.scrollex/0.1.0/jquery.scrollex.min.js"></script> --}}
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @stack('scripts')
    <script>
        $(function() {
            $('#messageForm').on('submit', function(e) {
                e.preventDefault();
                $('#submitBtn').attr("disabled", true).html(
                    '<i class="fas fa-spin fa-circle-notch"></i> Sending');
                let form = $("#messageForm");
                $.ajax({
                    type: "POST",
                    url: form.attr("action"),
                    data: form.serialize(),
                    success: function(res) {
                        if (res.success) {
                            form.trigger("reset")
                            Swal.fire(
                                'Thank You!',
                                res.message,
                                'success'
                            )
                        } else {
                            Swal.fire(
                                'Ooops!',
                                res.message,
                                'error'
                            )
                        }
                        $('#submitBtn').removeAttr("disabled").text('Send Message');

                    }
                });
            });
        })
    </script>
</body>

</html>
