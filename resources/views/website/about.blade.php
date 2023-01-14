@extends('layouts.website')
@section('content')
    @include('partials.breadcrumb', ['page' => 'About Us'])

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-lg-6 heading-section text-center ftco-animate">
                    <h2 class="mb-4">
                        More than <span>5+</span> years we provide
                        <span>IT Solutions</span>
                    </h2>
                    <p>
                        We allow you to start without having to worry about your
                        requirements, As we use our outstanding experience.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="services-2 text-center">
                        <div class="icon">
                            <span class="flaticon-web-programming"></span>
                        </div>
                        <div class="text">
                            <h3>Web Development</h3>
                            <p>
                                If online is precarious to the continued growth and success of
                                your business, it’s very important that it’s executed
                                perfectly. Which is where our Xorexs team of exceptionally
                                skilled and visionary developers come in.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="images/services.svg" class="img-fluid" alt="{{ config('app.name') }}" />
                </div>
                <div class="col-md-4">
                    <div class="services-2 text-center">
                        <div class="icon">
                            <span class="flaticon-secure"></span>
                        </div>
                        <div class="text">
                            <h3>Strategy & Planning</h3>
                            <p>
                                In a digital landscape that’s constantly changing and
                                evolving, you need a clear strategic plan. Xorexs is
                                determined to provide continuous support to handle all
                                strategic issues you might face.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card d-flex h-100">
                        <div class="card-body">
                            <h2 class="text-center">Our Vision</h2>
                            <p>Become the most recommendable service company in every market we serve and revolutionize this
                                company to have the strength of a big company combined with the leanness and agility of a
                                small company. Every day, our highly-skilled, diverse team will differentiate Xorexs to our
                                customers by demonstrating personal accountability, passion and innovation.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card d-flex h-100">
                        <div class="card-body">
                            <h2 class="text-center">Our Mission</h2>
                            <p>Our mission is to be a leader and the most successful Service Company in the Information
                                Technology, Software Development and Internet Service Industry. Xorexs help clients to
                                achieve their key business objectives through deep-rooted relationships with the most
                                knowledgeable, most professional staff, most accessible and easiest to work with team of
                                professionals in the industry.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card d-flex h-100">
                        <div class="card-body">
                            <h2 class="text-center">Our Team</h2>
                            <p>Xorexs team has Creative vision and talented Brains to serve the customer to the fullest. The
                                ultimate in consultation, skills diversity and adaptability to meet client expectations are
                                the very strengths. We have a combination of talents, Including Technical Engineers, S/w
                                programmers, Business analyst, Web developers, Web designers, Graphic designers, Copy
                                Writers, Internet marketers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-counter img" id="section-counter">
        <div class="container">
            <div class="row no-gutters d-flex">
                <div class="col-md-6 d-flex">
                    <div class="img d-flex align-self-stretch" style="background-image: url(images/about.jpg)"></div>
                </div>
                <div class="col-md-6 p-3 pl-md-5 py-5 bg-primary">
                    <div class="row justify-content-start pb-3">
                        <div class="col-md-12 heading-section heading-section-white ftco-animate">
                            <h2 class="mb-4">
                                Consult us here in <span>Xorexs Limited</span>
                            </h2>
                            <p>
                                We are committed to providing excellence in client service.
                                Xorexs Limited is totally committed to Quality Service,
                                Transparency, Customer Oriented Approach and Client
                                Satisfaction.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 mb-4">
                                <div class="text">
                                    <strong class="number" data-number="95">0</strong>
                                    <span>Project Complete</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 mb-4">
                                <div class="text">
                                    <strong class="number" data-number="40">0</strong>
                                    <span>Happy Clients</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 mb-4">
                                <div class="text">
                                    <strong class="number" data-number="3">0</strong>
                                    <span>Offices</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 mb-4">
                                <div class="text">
                                    <strong class="number">24*7</strong>
                                    <span>Dedicated Support</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb testimony-section" style="background-image: url(images/bg_1.jpg)">
        <div class="overlay-1"></div>
        <div class="container-fluid">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <h2 class="mb-4">Our satisfied clinets</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12 testimonial">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap d-flex align-items-stretch"
                                style="background-image: url(images/testimony-1.jpg)">
                                <div class="overlay"></div>
                                <div class="text">
                                    <div class="line"></div>
                                    <p class="mb-4">
                                        Xorexs Limited redeveloped the application on time and
                                        within the budget, meeting all of the project's milestones
                                        and pleasing the client. Their development skills and
                                        proactiveness accelerated the timeline and delivery of the
                                        project.
                                    </p>
                                    <p class="name">Sylvian Bruni</p>
                                    <!-- <span class="position">Marketing Manager</span> -->
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex align-items-stretch"
                                style="background-image: url(images/testimony-2.jpg)">
                                <div class="overlay"></div>
                                <div class="text">
                                    <div class="line"></div>
                                    <p class="mb-4">
                                        We have been working with Xorexs Limited since October
                                        2018 and we found their communication extremely effective
                                        and professional. Our goal with this project was to ensure
                                        a seamless and transparent competency review system and
                                        the application developed by Xorexs helped us achieve
                                        those desired results.
                                    </p>
                                    <p class="name">Katrinah Willcocks</p>
                                    <!-- <span class="position">Interface Designer</span> -->
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex align-items-stretch"
                                style="background-image: url(images/testimony-3.jpg)">
                                <div class="overlay"></div>
                                <div class="text">
                                    <div class="line"></div>
                                    <p class="mb-4">
                                        Xorexs Limited provided very good resources for our
                                        Broadband ISP and UX requirements. The work was completed
                                        on time and professionally. The project was carried out
                                        seamlessly and with utmost diligence. We would like to
                                        work with them again.
                                    </p>
                                    <p class="name">Philip Macridis</p>
                                    <!-- <span class="position">UI Designer</span> -->
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex align-items-stretch"
                                style="background-image: url(images/testimony-4.jpg)">
                                <div class="overlay"></div>
                                <div class="text">
                                    <div class="line"></div>
                                    <p class="mb-4">
                                        Xorexs Limited provided very good resources for our
                                        Broadband ISP and UX requirements. The work was completed
                                        on time and professionally. The project was carried out
                                        seamlessly and with utmost diligence. We would like to
                                        work with them again.
                                    </p>
                                    <p class="name">Roger Scott</p>
                                    <!-- <span class="position">Web Developer</span> -->
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex align-items-stretch"
                                style="background-image: url(images/testimony-5.jpg)">
                                <div class="overlay"></div>
                                <div class="text">
                                    <div class="line"></div>
                                    <p class="mb-4">
                                        We are pleasantly surprised by the process that Xorexs
                                        team adopted to handle this complex integration. Their
                                        engineers became core part of our team and took the
                                        ownership of the whole project in a very professional way.
                                    </p>
                                    <p class="name">Wayne Walls</p>
                                    <!-- <span class="position">System Analyst</span> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
