<!DOCTYPE html>
<html lang="en">

<head>
    <title>Xorexs Limited</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet" />

    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" /> --}}
    <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <style>
        .text-black {
            color: rgba(0, 0, 0, 0.8) !important;
        }

        .text-blue {
            color: #212cc5 !important;
        }

        .font-semibold {
            font-weight: 600
        }

        .bg-custom {
            background-color: transparent;
            background: linear-gradient(180deg, #FFFFFF 0%, #eff2ff 100%)
        }

        .bg-old {
            background: #eff2ff;
        }
    </style>
    @stack('recaptcha')
</head>

<body>
    {{-- header --}}
    @include('layouts.header')

    {{-- main content start --}}
    @yield('content')
    {{-- main content end --}}

    <section class="bg-custom text-center p-5">
        <h1>Let us together build a flourishing business</h1>
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

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('js/google-map.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
