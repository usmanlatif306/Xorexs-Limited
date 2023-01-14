@extends('layouts.website')
@section('content')
    @include('partials.breadcrumb', ['page' => 'Services', 'subpage' => 'Strategy & Planning'])

    <section class="p-5 bg-light">
        <div class="container">
            <div class="mb-2">
                <h1 class="text-center">Strategy & Planning</h1>
                <p class="font-semibold text-black">In a digital landscape that’s constantly changing and evolving, you need
                    a clear strategic plan. </p>
                <p>A plan that’s robust enough to stay aligned with long-term business goals – yet flexible enough that you
                    can take advantage of new trends and technologies as they emerge. A plan that delivers agility in the
                    face of market disruption. And rapid scalability during periods of
                    business growth. Xorexs. For when predicting the future seems impossible.</p>
            </div>
            <div class="mb-2">
                <h1 class="text-center">The digital imperative</h1>
                <p>It’s clear that there are many benefits to be gained from strategic planning activity. But the sheer
                    scale of the task can be daunting, and can hinder many organisations when trying to create an
                    overarching digital strategy, or even prevent them in their efforts completely. And when you’re also
                    seeking to put digital enablement at the heart of your business as part of a wider digital
                    transformation initiative, then this complexity is only compounded.</p>
                <p>Let Xorexs put you on the path to success.</p>
                <p>Our digital maturity model breaks the journey to better serve your customers and your business into
                    clear, distinct steps. At every stage, our consultants are on hand to help – whether you need guidance
                    in a specific area, or a dedicated partner to help manage your strategy from inception through to
                    implementation. </p>
            </div>
        </div>
    </section>

    @include('partials.service')
@endsection
