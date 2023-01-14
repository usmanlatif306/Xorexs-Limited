@extends('layouts.website')
@section('content')
    @include('partials.breadcrumb', ['page' => 'Services', 'subpage' => 'Web & Mobile Development'])

    <section class="p-5 bg-light">
        <div class="container">
            <div class="mb-2">
                <h1 class="text-center">Web & Mobile Development</h1>
                <p class="font-semibold text-black">If online is critical to the continued growth and success of your
                    business, it’s important that it’s executed perfectly. Which is where our team of exceptionally skilled
                    and visionary developers come in.</p>
                <p>We create innovative websites and mobile experiences that delight and differentiate for ambitious,
                    disruptive and innovative organisations worldwide – helping drive measurable results including audience
                    expansion,cost savings, and recognition from leading industry bodies. So if you need help turning your
                    digital vision into reality, the solution’s brilliantly simple: let Xorexs be your guide.</p>
            </div>
            <div class="mb-2">
                <h1 class="text-center">In safe hands</h1>
                <p>When it comes to high-performance applications and websites that fuel growth and profitability, you can
                    rely on Xorexs to deliver. Drawing on Years of development experience, we employ industry best practices
                    and robust agile processes to help organisations across the globe achieve measurable returns – and have
                    a proven portfolio of results.</p>
            </div>
            <div class="mb-2">
                <h1 class="text-center">Keep up with the pace</h1>
                <p>With new trends and technologies emerging all the time, navigating the fragmented and fast-moving digital
                    landscape can be challenging. At Xorexs though we have 8 years of cross-sector experience, so you know
                    you’re getting best-of-breed solutions with us. Recruiting from purposely diverse backgrounds, we
                    leverage the skill of our analysts, the blend of PHP and .NET in our development team, and the
                    experience of our team to find you the right solution, rather than the most obvious one – critically
                    evaluating where things could be bettered to develop and augment competitive advantage.</p>
            </div>
        </div>
    </section>

    @include('partials.service')
@endsection
