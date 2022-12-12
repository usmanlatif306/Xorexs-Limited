@extends('layouts.app')
@push('recaptcha')
    {!! RecaptchaV3::initJs() !!}
@endpush
@section('content')
    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg')" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
                <div class="col-md-8 ftco-animate mt-5 pt-md-5" data-scrollax=" properties: { translateY: '70%' }">
                    <div class="row">
                        <div class="col-md-7">
                            <p class="mb-4 pl-md-5 line" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                                A leading software development company located in United
                                Kingdom
                            </p>
                        </div>
                    </div>
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                        Delivering Exceptional <br />Technology Solutions
                    </h1>
                    <p><a href="#" class="btn btn-primary px-4 py-3">Read more</a></p>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-intro">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-7">
                    <div class="row no-gutters d-flex align-items-stretch">
                        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                            <div class="services-1">
                                <div class="line"></div>
                                <div class="icon"><span class="flaticon-bolt"></span></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">
                                        Information Technology Consultancy
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                            <div class="services-1 color-1">
                                <div class="line"></div>
                                <div class="icon">
                                    <span class="flaticon-light-bulb"></span>
                                </div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Product Design Strategy</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                            <div class="services-1 color-2">
                                <div class="line"></div>
                                <div class="icon">
                                    <span class="flaticon-web-programming"></span>
                                </div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Web & Mobile Development</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                    <img src="images/services.svg" class="img-fluid" alt="" />
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

    <section class="ftco-section services-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-6 heading-section text-center ftco-animate">
                    <h2 class="mb-4">
                        Our Exclusive <span>Xorexs Limited</span> Services
                    </h2>
                </div>
            </div>
            <div class="row d-flex no-gutters">
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="line"></div>
                        <div class="icon"><span class="flaticon-stats"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Consultancy</h3>
                            <p>
                                Xorexs is working with clients for whom software is
                                mission-critical. For whom making the right technical
                                decisions, at the right time, is vital to the continued
                                success and development of their businesses.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="line"></div>
                        <div class="icon">
                            <span class="flaticon-web-programming"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading mb-3">eCommerce</h3>
                            <p>
                                With an integrated E-Commerce platform, inventory and sales
                                can easily be sustained. Boost your sales with cross selling
                                and upselling opportunities on Xorexs product pages.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="line"></div>
                        <div class="icon"><span class="flaticon-secure"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">User Experience & Design</h3>
                            <p>
                                Xorexs all know that a good user experience should be
                                instinctive, natural, and effortless. We have immense of
                                experience to make it happen.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="line"></div>
                        <div class="icon">
                            <span class="flaticon-presentation"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Help & Support</h3>
                            <p>
                                We provide 24/7 support services. You can email anytime, any
                                day and we'll respond to you within minutes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Our Strategic <span>Work</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="project">
                        <div class="img">
                            <img src="images/work-1.jpg" class="img-fluid" alt="Colorlib Template" />
                        </div>
                        <div class="text text-center">
                            <span>Web Development</span>
                            <h3>
                                <a href="project.html">Best Solution for Information Technology</a>
                            </h3>
                        </div>
                        <a href="images/work-1.jpg"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="project">
                        <div class="img">
                            <img src="images/work-2.jpg" class="img-fluid" alt="Colorlib Template" />
                        </div>
                        <div class="text text-center">
                            <span>Web Application</span>
                            <h3><a href="project.html">Creative Idea Build Up</a></h3>
                        </div>
                        <a href="images/work-2.jpg"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="project">
                        <div class="img">
                            <img src="images/work-3.jpg" class="img-fluid" alt="Colorlib Template" />
                        </div>
                        <div class="text text-center">
                            <span>Web Development</span>
                            <h3>
                                <a href="project.html">Web Design Concept &amp; Web Analysis</a>
                            </h3>
                        </div>
                        <a href="images/work-3.jpg"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="project">
                        <div class="img">
                            <img src="images/work-4.jpg" class="img-fluid" alt="Colorlib Template" />
                        </div>
                        <div class="text text-center">
                            <span>UI/UX Strategy</span>
                            <h3>
                                <a href="project.html">Strategy for Enduring Customer Relationships</a>
                            </h3>
                        </div>
                        <a href="images/work-4.jpg"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
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

    <!-- <section class="ftco-section bg-light">
                                                                                                                                                                      <div class="container">
                                                                                                                                                                        <div class="row justify-content-center mb-5 pb-3">
                                                                                                                                                                          <div class="col-md-7 heading-section text-center ftco-animate">
                                                                                                                                                                            <h2>Read our latest blog</h2>
                                                                                                                                                                          </div>
                                                                                                                                                                        </div>
                                                                                                                                                                        <div class="row d-flex">
                                                                                                                                                                          <div class="col-md-4 d-flex ftco-animate">
                                                                                                                                                                            <div class="blog-entry justify-content-end">
                                                                                                                                                                              <a
                                                                                                                                                                                href="blog-single.html"
                                                                                                                                                                                class="block-20"
                                                                                                                                                                                style="background-image: url('images/image_1.jpg')"
                                                                                                                                                                              >
                                                                                                                                                                              </a>
                                                                                                                                                                              <div class="text mt-3 float-right d-block">
                                                                                                                                                                                <div class="d-flex align-items-center pt-2 mb-4 topp">
                                                                                                                                                                                  <div class="one">
                                                                                                                                                                                    <span class="day">29</span>
                                                                                                                                                                                  </div>
                                                                                                                                                                                  <div class="two pl-1">
                                                                                                                                                                                    <span class="yr">2020</span>
                                                                                                                                                                                    <span class="mos">June</span>
                                                                                                                                                                                  </div>
                                                                                                                                                                                </div>
                                                                                                                                                                                <h3 class="heading">
                                                                                                                                                                                  <a href="#">Why Lead Generation is Key for Business Growth</a>
                                                                                                                                                                                </h3>
                                                                                                                                                                              </div>
                                                                                                                                                                            </div>
                                                                                                                                                                          </div>
                                                                                                                                                                          <div class="col-md-4 d-flex ftco-animate">
                                                                                                                                                                            <div class="blog-entry justify-content-end">
                                                                                                                                                                              <a
                                                                                                                                                                                href="blog-single.html"
                                                                                                                                                                                class="block-20"
                                                                                                                                                                                style="background-image: url('images/image_2.jpg')"
                                                                                                                                                                              >
                                                                                                                                                                              </a>
                                                                                                                                                                              <div class="text mt-3 float-right d-block">
                                                                                                                                                                                <div class="d-flex align-items-center pt-2 mb-4 topp">
                                                                                                                                                                                  <div class="one">
                                                                                                                                                                                    <span class="day">29</span>
                                                                                                                                                                                  </div>
                                                                                                                                                                                  <div class="two pl-1">
                                                                                                                                                                                    <span class="yr">2020</span>
                                                                                                                                                                                    <span class="mos">June</span>
                                                                                                                                                                                  </div>
                                                                                                                                                                                </div>
                                                                                                                                                                                <h3 class="heading">
                                                                                                                                                                                  <a href="#">Why Lead Generation is Key for Business Growth</a>
                                                                                                                                                                                </h3>
                                                                                                                                                                              </div>
                                                                                                                                                                            </div>
                                                                                                                                                                          </div>
                                                                                                                                                                          <div class="col-md-4 d-flex ftco-animate">
                                                                                                                                                                            <div class="blog-entry">
                                                                                                                                                                              <a
                                                                                                                                                                                href="blog-single.html"
                                                                                                                                                                                class="block-20"
                                                                                                                                                                                style="background-image: url('images/image_3.jpg')"
                                                                                                                                                                              >
                                                                                                                                                                              </a>
                                                                                                                                                                              <div class="text mt-3 float-right d-block">
                                                                                                                                                                                <div class="d-flex align-items-center pt-2 mb-4 topp">
                                                                                                                                                                                  <div class="one">
                                                                                                                                                                                    <span class="day">29</span>
                                                                                                                                                                                  </div>
                                                                                                                                                                                  <div class="two pl-1">
                                                                                                                                                                                    <span class="yr">2020</span>
                                                                                                                                                                                    <span class="mos">June</span>
                                                                                                                                                                                  </div>
                                                                                                                                                                                </div>
                                                                                                                                                                                <h3 class="heading">
                                                                                                                                                                                  <a href="#">Why Lead Generation is Key for Business Growth</a>
                                                                                                                                                                                </h3>
                                                                                                                                                                              </div>
                                                                                                                                                                            </div>
                                                                                                                                                                          </div>
                                                                                                                                                                        </div>
                                                                                                                                                                      </div>
                                                                                                                                                                    </section> -->

    <section class="ftco-appointment ftco-section img" style="background-image: url(images/bg_2.jpg)">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 half ftco-animate">
                    <h2 class="mb-4">Don't hesitate to contact us</h2>
                    <form id="messageForm" action="{{ route('message.send') }}" method="POST" class="appointment">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name"
                                        required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                        required />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject"
                                        required />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="message" cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group {{ $errors->has('g-recaptcha-response') ? 'has-error' : '' }}">
                                    <div class="col-md-6">
                                        {!! RecaptchaV3::field('register') !!}
                                        @if ($errors->has('g-recaptcha-response'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button id="submitBtn" type="submit" class="btn btn-primary py-3 px-4">Send
                                        Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
