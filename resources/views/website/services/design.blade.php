@extends('layouts.app')
@section('content')
    @include('partials.breadcrumb', ['page' => 'Services', 'subpage' => 'User Experience & Design'])

    <section class="p-5 bg-light">
        <div class="container">
            <div class="mb-2">
                <h1 class="text-center">User Experience & Design</h1>
                <p class="font-semibold text-black">We all know that a good user experience should be instinctive, natural,
                    and effortless. But at Xorexs we also have the years of experience to make it so.</p>
                <p>Working with international organisations across a broad range of industries, Xorexs have built up a
                    portfolio of successful that speaks for itself. We have proven time and again that the benefits of
                    investing in user experience are not only far-reaching but also long-lasting – positively impacting on
                    user satisfaction and business performance.</p>
            </div>
            <div class="mb-2">
                <h1 class="text-center">Putting the user in user experience</h1>
                <p>Over the years we have developed a formidable team, with expertise across the full range of User
                    Experience and Design. We craft every aspect of your site or application around the specific needs,
                    motivations, expectations, behaviours and constraints of your users. We question, we test, and we trial
                    – using both qualitative and quantitative research to ensure that our decisions and recommendations are
                    based on real-world requirements – not assumptions – to give you maximum confidence in the results. Put
                    simply, Xorexs think harder, so users don’t have to.</p>
            </div>
            <div class="mb-2">
                <h1 class="text-center">Delivering valuable returns</h1>
                <p>Of course, there’s an enormous financial incentive to creating a great user experience. And the better
                    that experience is, the more popular you and your digital products become. You want to make a positive
                    impact on satisfaction levels and performance, you know what to do… get in touch with the team, and see
                    how we can help you.</p>
            </div>
        </div>
    </section>

    @include('partials.service')
@endsection
