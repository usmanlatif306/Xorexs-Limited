@extends('layouts.app')
@section('content')
    @include('partials.breadcrumb', ['page' => 'Services', 'subpage' => 'Software Consultancy'])

    <section class="p-5 bg-light">
        <div class="container">
            <div class="mb-2">
                <h1 class="text-center">Software Consultancy</h1>
                <p class="font-semibold text-black">We work with clients for whom software is mission-critical.</p>
                <p>For whom making the right technical decisions, at the right time, is imperative to the continued success
                    and
                    growth of their businesses. And so we provide a team that is committed, proven and creative. As well as
                    endlessly excited about the potential of what can be achieved.</p>
            </div>
            <div class="mb-2">
                <h1 class="text-center">We’ll step up when you need us</h1>

                <p>Our business analysts, technical architects, and quality assurance and systems engineers have extensive
                    experience working across different industries and projects. You can rest assured that we’ll get to the
                    bottom of your requirements. And then define a solution that delivers.</p>
            </div>
            <div class="mb-2">
                <h1 class="text-center">We give as good as we get</h1>
                <p>As much as our clients challenge us, we challenge them too. The organisations we work with want to
                    partner with the best in the business – people who will push them all the way, and aren’t afraid to ask
                    the searching questions needed to get them where they need to be. So, if you’re looking for guidance on
                    technical matters such as usability, performance, extensibility, security and stability, then make sure
                    you talk to us. We think you’ll be very happy that you did.</p>
            </div>
        </div>
    </section>

    @include('partials.service')
@endsection
