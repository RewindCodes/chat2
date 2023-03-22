@extends('layout.app')
@section('main')

    {{-- HERO Section --}}
    <div class="demo-screen-headline main-demo main-demo-1 spacing-top overflow-hidden reveal" id="home">
        <div class="container px-sm-0">
            <div class="row">
                <div class="col-xl-12 col-lg-12 mb-5 pb-5 animation-zidex pos-relative text-center">
                    <h4 class="fw-semibold mt-7">Effortlessly Communicate</h4>
                    <h1 class="fw-bold">Chat2 AI: Your Personal Conversational Assistant</h1>
                    <h4 class="pb-3 mx-4 leading-normal">
                        Experience seamless communication with Chat2, the powerful AI chat app <br>that will revolutionize the way you chat.
                    </h4>

                    <a href="#"
                        target="_blank" class="btn ripple btn-min w-lg mb-3 me-2 btn-primary"><i
                            class="fe fe-play me-2"></i> Get Started
                    </a>
                    <a href="#"
                        class="btn ripple btn-min w-lg btn-outline-primary mb-3 me-2" target="_blank"><i
                            class="fe fe-eye me-2"></i>Discover More
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- About -->
    <div class="section bg-landing pb-0 bg-image-style" id="About">
        <div class="container">
            <div class="row">
                <h4 class="text-center fw-semibold">Our Mission</h4>
                <span class="landing-title"></span>
                <div class="text-center">
                    <h2 class="text-center fw-semibold">Our mission is to make work meaningful.
                    </h2>
                </div>
                <div class="col-lg-12">
                    <div class="card bg-transparent">
                        <div class="card-body text-dark">
                            <div class="statistics-info">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 ps-0">
                                        <div class="text-center reveal revealleft mb-3">
                                            <img src="assets/images/landing/AI Assistant.png"
                                                alt="" class="br-5">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 pe-0 my-auto">

                                        <div class="ps-5 reveal revealright">
                                            <h2 class="text-start fw-semibold fs-25 mb-6">We are
                                                a creative agency with a passion for design.
                                            </h2>
                                            <div class="d-flex">
                                                <i class="fe fe-check-circle me-2"></i>
                                                <div class="ms-5 mb-4">
                                                    <h5 class="fw-bold">Quality & Clean Code
                                                    </h5>
                                                    <p>The Sash admin code is maintained very
                                                        cleanly and well-structured with proper
                                                        comments.</p>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <i class="fe fe-check-circle me-2"></i>
                                                <div class="ms-5 mb-4">
                                                    <h5 class="fw-bold">Well Documented</h5>
                                                    <p>
                                                        The documentation provides clear-cut
                                                        material for the Sash admin template.
                                                        The documentation is explained or
                                                        instructed in such a way that every user
                                                        can understand.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About CLOSED -->


    {{-- Pricing --}}
    <div class="bg-landing section bg-image-style" id="Pricing">
        <div class="container">
            <div class="row">
                <h4 class="text-center fw-semibold">Choose a plan </h4>
                <span class="landing-title"></span>
                <h2 class="text-center fw-semibold">Find the <span class="text-primary">Perfect
                        Plan</span> for your Business.</h2>
                <div class="pricing-tabs">
                    <div class="pri-tabs-heading text-center">
                        <ul class="nav nav-price">
                            <li><a data-bs-toggle="tab" href="#month">Monthly</a></li>
                            <li><a class="active show" data-bs-toggle="tab"
                                    href="#annualyear">Annual</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane pb-0 active show" id="annualyear">
                            <div class="row d-flex align-items-center justify-content-center">
                                <div class="col-lg-4 col-xl-4 col-md-8 col-sm-12">
                                    <div class="card p-3 pricing-card reveal revealrotate">
                                        <div class="card-header d-block text-justified pt-2">
                                            <p class="fs-18 fw-semibold mb-1">Basic</p>
                                            <p class="text-justify fw-semibold mb-1"> <span
                                                    class="fs-30 me-2">$</span><span
                                                    class="fs-30 me-1">399</span><span
                                                    class="fs-25"><span
                                                        class="op-0-5 text-muted text-20">/</span>
                                                    year</span></p>
                                            <p class="fs-13 mb-1">Lorem ipsum dolor sit amet
                                                consectetur adipisicing elit. Iure quos debitis
                                                aliquam .</p>
                                            <p class="fs-13 mb-1 text-secondary">Billed monthly
                                                on regular basis!</p>
                                        </div>
                                        <div class="card-body pt-2">
                                            <ul class="text-justify pricing-body ps-0">
                                                <li><i
                                                        class="mdi mdi-checkbox-marked-circle-outline p-2 fs-16 text-secondary"></i><strong>
                                                        2 Free</strong> Domain Name</li>
                                                <li><i
                                                        class="mdi mdi-checkbox-marked-circle-outline p-2 fs-16 text-secondary"></i>
                                                    <strong>3 </strong> One-Click Apps
                                                </li>
                                                <li class="text-muted"><i
                                                        class="mdi mdi-close-circle-outline p-2 fs-16 text-gray"></i><strong>
                                                        1 </strong> Databases</li>
                                                <li class="text-muted"><i
                                                        class="mdi mdi-close-circle-outline p-2 fs-16 text-gray"></i><strong>
                                                        Unlimited </strong> Cloud Storage</li>
                                                <li class="text-muted"><i
                                                        class="mdi mdi-close-circle-outline p-2 fs-16 text-gray"></i><strong>
                                                        Money </strong> BackGuarantee</li>
                                                <li class=text-muted"><i
                                                        class="mdi mdi-close-circle-outline p-2 fs-16 text-gray"></i><strong>
                                                        24/7</strong> support</li>
                                            </ul>
                                        </div>
                                        <div class="card-footer text-center border-top-0 pt-1">
                                            <button
                                                class="btn btn-lg btn-outline-secondary btn-block">
                                                <span class="ms-4 me-4">Select</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-md-8 col-sm-12">
                                    <div
                                        class="card p-3 border-primary pricing-card advanced reveal revealrotate">
                                        <div class="card-header d-block text-justified pt-2">
                                            <p class="fs-18 fw-semibold mb-1 pe-0">Advanced<span
                                                    class="tag bg-primary text-white float-end">Limited
                                                    Deal</span></p>
                                            <p class="text-justify fw-semibold mb-1"> <span
                                                    class="fs-30 me-2">$</span><span
                                                    class="fs-30 me-1">1,299</span><span
                                                    class="fs-25"><span
                                                        class="op-0-5 text-muted text-20">/</span>
                                                    year</span></p>
                                            <p class="fs-13 mb-2">Lorem ipsum dolor sit amet
                                                consectetur adipisicing elit. Iure quos debitis
                                                aliquam .</p>
                                            <p class="fs-13 mb-1 text-primary">Billed monthly on
                                                regular basis!</p>
                                        </div>
                                        <div class="card-body pt-2">
                                            <ul class="text-justify pricing-body ps-0">
                                                <li><i
                                                        class="mdi mdi-checkbox-marked-circle-outline text-primary p-2 fs-16"></i>
                                                    <strong> 5 Free</strong> Domain Name
                                                </li>
                                                <li><i
                                                        class="mdi mdi-checkbox-marked-circle-outline text-primary p-2 fs-16"></i><strong>5
                                                    </strong> One-Click Apps</li>
                                                <li><i
                                                        class="mdi mdi-checkbox-marked-circle-outline text-primary p-2 fs-16"></i><strong>
                                                        3 </strong> Databases</li>
                                                <li><i
                                                        class="mdi mdi-checkbox-marked-circle-outline text-primary p-2 fs-16"></i><strong>
                                                        Unlimited </strong> Cloud Storage</li>
                                                <li><i
                                                        class="mdi mdi-checkbox-marked-circle-outline text-primary p-2 fs-16"></i><strong>
                                                        Money </strong> BackGuarantee</li>
                                                <li class="mb-6"><i
                                                        class="mdi mdi-checkbox-marked-circle-outline text-primary p-2 fs-16"></i><strong>
                                                        24/7</strong> support</li>
                                            </ul>
                                        </div>
                                        <div class="card-footer text-center border-top-0 pt-1">
                                            <button
                                                class="btn btn-lg btn-primary-gradient text-white btn-block">
                                                <span class="ms-4 me-4">Select</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-md-8 col-sm-12">
                                    <div class="card p-3 pricing-card reveal revealrotate">
                                        <div class="card-header d-block text-justified pt-2">
                                            <p class="fs-18 fw-semibold mb-1">Regular</p>
                                            <p class="text-justify fw-semibold mb-1"> <span
                                                    class="fs-30 me-2">$</span><span
                                                    class="fs-30 me-1">899</span><span
                                                    class="fs-25"><span
                                                        class="op-0-5 text-muted text-20">/</span>
                                                    year</span></p>
                                            <p class="fs-13 mb-1">Lorem ipsum dolor sit amet
                                                consectetur adipisicing elit. Iure quos debitis
                                                aliquam .</p>
                                            <p class="fs-13 mb-1  text-danger">Billed monthly on
                                                regular basis!</p>
                                        </div>
                                        <div class="card-body pt-2">
                                            <ul class="text-justify pricing-body ps-0">
                                                <li><i
                                                        class="mdi mdi-checkbox-marked-circle-outline text-danger p-2 fs-16"></i><strong>
                                                        1 Free</strong> Domain Name</li>
                                                <li><i
                                                        class="mdi mdi-checkbox-marked-circle-outline text-danger p-2 fs-16"></i><strong>4
                                                    </strong> One-Click Apps</li>
                                                <li><i
                                                        class="mdi mdi-checkbox-marked-circle-outline text-danger p-2 fs-16"></i><strong>
                                                        2 </strong> Databases</li>
                                                <li class="text-muted"><i
                                                        class="mdi mdi-close-circle-outline text-gray p-2 fs-16"></i><strong>
                                                        Unlimited </strong> Cloud Storage</li>
                                                <li class="text-muted"><i
                                                        class="mdi mdi-close-circle-outline text-gray p-2 fs-16"></i><strong>
                                                        Money </strong> BackGuarantee</li>
                                                <li class="text-muted"><i
                                                        class="mdi mdi-close-circle-outline text-gray p-2 fs-16"></i><strong>
                                                        24/7</strong> support</li>
                                            </ul>
                                        </div>
                                        <div class="card-footer text-center border-top-0 pt-1">
                                            <button
                                                class="btn btn-lg btn-outline-danger btn-block">
                                                <span class="ms-4 me-4">Select</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="month">
                            <div class="row d-flex align-items-center justify-content-center">
                                <div class="col-lg-4 col-xl-4 col-md-8 col-sm-12">
                                    <div class="card p-3 pricing-card">
                                        <div class="card-header d-block text-justified pt-2">
                                            <p class="fs-18 fw-semibold mb-1">Basic</p>
                                            <p class="text-justify fw-semibold mb-1"> <span
                                                    class="fs-30 me-2">$</span><span
                                                    class="fs-30 me-1">39</span><span
                                                    class="fs-25"><span
                                                        class="op-0-5 text-muted text-20">/</span>
                                                    month</span></p>
                                            <p class="fs-13 mb-1">Lorem ipsum dolor sit amet
                                                consectetur adipisicing elit. Iure quos debitis
                                                aliquam .</p>
                                            <p class="fs-13 mb-1 text-secondary">Billed monthly
                                                on regular basis!</p>
                                        </div>
                                        <div class="card-body pt-2">
                                            <ul class="text-justify pricing-body ps-0">
                                                <li><i
                                                        class="mdi mdi-checkbox-marked-circle-outline p-2 fs-16 text-secondary"></i><strong>
                                                        2 Free</strong> Domain Name</li>
                                                <li><i
                                                        class="mdi mdi-checkbox-marked-circle-outline p-2 fs-16 text-secondary"></i>
                                                    <strong>3 </strong> One-Click Apps
                                                </li>
                                                <li class="text-muted"><i
                                                        class="mdi mdi-close-circle-outline p-2 fs-16 text-gray"></i><strong>
                                                        1 </strong> Databases</li>
                                                <li class="text-muted"><i
                                                        class="mdi mdi-close-circle-outline p-2 fs-16 text-gray"></i><strong>
                                                        Unlimited </strong> Cloud Storage</li>
                                                <li class="text-muted"><i
                                                        class="mdi mdi-close-circle-outline p-2 fs-16 text-gray"></i><strong>
                                                        Money </strong> BackGuarantee</li>
                                                <li class=text-muted"><i
                                                        class="mdi mdi-close-circle-outline p-2 fs-16 text-gray"></i><strong>
                                                        24/7</strong> support</li>
                                            </ul>
                                        </div>
                                        <div class="card-footer text-center border-top-0 pt-1">
                                            <button
                                                class="btn btn-lg btn-outline-secondary btn-block">
                                                <span class="ms-4 me-4">Select</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-md-8 col-sm-12">
                                    <div class="card p-3 border-primary pricing-card advanced">
                                        <div class="card-header d-block text-justified pt-2">
                                            <p class="fs-18 fw-semibold mb-1 pe-0">Advanced<span
                                                    class="tag bg-primary text-white float-end">Limited
                                                    Deal</span></p>
                                            <p class="text-justify fw-semibold mb-1"> <span
                                                    class="fs-30 me-2">$</span><span
                                                    class="fs-30 me-1">199</span><span
                                                    class="fs-25"><span
                                                        class="op-0-5 text-muted text-20">/</span>
                                                    month</span></p>
                                            <p class="fs-13 mb-2">Lorem ipsum dolor sit amet
                                                consectetur adipisicing elit. Iure quos debitis
                                                aliquam .</p>
                                            <p class="fs-13 mb-1 text-primary">Billed monthly on
                                                regular basis!</p>
                                        </div>
                                        <div class="card-body pt-2">
                                            <ul class="text-justify pricing-body ps-0">
                                                <li><i
                                                        class="mdi mdi-checkbox-marked-circle-outline text-primary p-2 fs-16"></i>
                                                    <strong> 5 Free</strong> Domain Name
                                                </li>
                                                <li><i
                                                        class="mdi mdi-checkbox-marked-circle-outline text-primary p-2 fs-16"></i><strong>5
                                                    </strong> One-Click Apps</li>
                                                <li><i
                                                        class="mdi mdi-checkbox-marked-circle-outline text-primary p-2 fs-16"></i><strong>
                                                        3 </strong> Databases</li>
                                                <li><i
                                                        class="mdi mdi-checkbox-marked-circle-outline text-primary p-2 fs-16"></i><strong>
                                                        Unlimited </strong> Cloud Storage</li>
                                                <li><i
                                                        class="mdi mdi-checkbox-marked-circle-outline text-primary p-2 fs-16"></i><strong>
                                                        Money </strong> BackGuarantee</li>
                                                <li class="mb-6"><i
                                                        class="mdi mdi-checkbox-marked-circle-outline text-primary p-2 fs-16"></i><strong>
                                                        24/7</strong> support</li>
                                            </ul>
                                        </div>
                                        <div class="card-footer text-center border-top-0 pt-1">
                                            <button
                                                class="btn btn-lg btn-primary-gradient text-white btn-block">
                                                <span class="ms-4 me-4">Select</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-md-8 col-sm-12">
                                    <div class="card p-3 pricing-card">
                                        <div class="card-header d-block text-justified pt-2">
                                            <p class="fs-18 fw-semibold mb-1">Regular</p>
                                            <p class="text-justify fw-semibold mb-1"> <span
                                                    class="fs-30 me-2">$</span><span
                                                    class="fs-30 me-1">69</span><span
                                                    class="fs-25"><span
                                                        class="op-0-5 text-muted text-20">/</span>
                                                    month</span></p>
                                            <p class="fs-13 mb-1">Lorem ipsum dolor sit amet
                                                consectetur adipisicing elit. Iure quos debitis
                                                aliquam .</p>
                                            <p class="fs-13 mb-1  text-danger">Billed monthly on
                                                regular basis!</p>
                                        </div>
                                        <div class="card-body pt-2">
                                            <ul class="text-justify pricing-body ps-0">
                                                <li><i
                                                        class="mdi mdi-checkbox-marked-circle-outline text-danger p-2 fs-16"></i><strong>
                                                        1 Free</strong> Domain Name</li>
                                                <li><i
                                                        class="mdi mdi-checkbox-marked-circle-outline text-danger p-2 fs-16"></i><strong>4
                                                    </strong> One-Click Apps</li>
                                                <li><i
                                                        class="mdi mdi-checkbox-marked-circle-outline text-danger p-2 fs-16"></i><strong>
                                                        2 </strong> Databases</li>
                                                <li class="text-muted"><i
                                                        class="mdi mdi-close-circle-outline text-gray p-2 fs-16"></i><strong>
                                                        Unlimited </strong> Cloud Storage</li>
                                                <li class="text-muted"><i
                                                        class="mdi mdi-close-circle-outline text-gray p-2 fs-16"></i><strong>
                                                        Money </strong> BackGuarantee</li>
                                                <li class="text-muted"><i
                                                        class="mdi mdi-close-circle-outline text-gray p-2 fs-16"></i><strong>
                                                        24/7</strong> support</li>
                                            </ul>
                                        </div>
                                        <div class="card-footer text-center border-top-0 pt-1">
                                            <button
                                                class="btn btn-lg btn-outline-danger btn-block">
                                                <span class="ms-4 me-4">Select</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing CLOSED -->

    <!-- FAQ's -->
    <div class="section" id="Faqs">
        <div class="container">
            <div class="row">
                <h4 class="text-center fw-semibold">FAQ'S ?</h4>
                <span class="landing-title"></span>
                <h2 class="text-center fw-semibold">We are here to help you</h2>
                <div class="row justify-content-center">
                    <p class="col-xl-9 wow fadeInUp text-default sub-text mb-7"
                        data-wow-delay="0s">
                        The Sash admin template is one of the modern dashboard templates.
                        It is also a premium admin dashboard with high-end features, where users
                        can easily customize
                        or change their projects according to their choice.
                    </p>
                </div>
                <section class="sptb demo-screen-demo" id="faqs">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-lg-12">
                            <div class="col-md-12 grid-item  px-0">
                                <div
                                    class="card card-collapsed faq-bg p-0 reveal">
                                    <div class="card-header grid-link"
                                        data-bs-toggle="card-collapse">
                                        <a href="#"
                                            class="card-options-collapse h5 fw-bold card-title mb-0"><span
                                                class="me-3 fs-18 fw-bold text-primary">01.</span>Can
                                            i get a free trial before purchase ?</a>
                                    </div>
                                    <div class="card-body pt-0">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Iure quos debitis aliquam .
                                        </p>
                                        <p class="mt-2 mb-3">
                                            <span class="fw-bold">Note: </span>Please Refer
                                            support section for more information.
                                        </p>
                                        <a href="javascript:void(0)"
                                            class="btn btn-outline-primary tx-13">Click here</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 grid-item  px-0">
                                <div
                                    class="card card-collapsed faq-bg p-0 reveal">
                                    <div class="card-header grid-link"
                                        data-bs-toggle="card-collapse">
                                        <a href="#"
                                            class="card-options-collapse  h5 fw-bold card-title mb-0"><span
                                                class="me-3 fs-18 fw-bold text-primary">02.</span>What
                                            type of files i will get after purchase ?</a>
                                    </div>
                                    <div class="card-body pt-0">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Iure quos debitis aliquam.
                                        </p>
                                        <p class="mt-2 mb-3">
                                            <span class="fw-bold">Note: </span>Please Refer
                                            support section for more information.
                                        </p>
                                        <a href="javascript:void(0)"
                                            class="btn btn-outline-success tx-13">Click here</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 grid-item  px-0">
                                <div
                                    class="card card-collapsed faq-bg p-0 reveal">
                                    <div class="card-header grid-link"
                                        data-bs-toggle="card-collapse">
                                        <a href="#"
                                            class="card-options-collapse  h5 fw-bold card-title mb-0"><span
                                                class="me-3 fs-18 fw-bold text-primary">03.</span>What
                                            is a single Application</a>
                                    </div>
                                    <div class="card-body pt-0">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Iure quos debitis aliquam.
                                        </p>
                                        <p class="mt-2 mb-3">
                                            <span class="fw-bold">Note: </span>Please Refer
                                            support section for more information.
                                        </p>
                                        <a href="javascript:void(0)"
                                            class="btn btn-outline-secondary tx-13">Click
                                            here</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 grid-item  px-0">
                                <div
                                    class="card card-collapsed faq-bg p-0 reveal">
                                    <div class="card-header grid-link"
                                        data-bs-toggle="card-collapse">
                                        <a href="#"
                                            class="card-options-collapse  h5 fw-bold card-title mb-0"><span
                                                class="me-3 fs-18 fw-bold text-primary">04.</span>How
                                            to get future updates ?</a>
                                    </div>
                                    <div class="card-body pt-0">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Iure quos debitis aliquam.
                                        </p>
                                        <p class="mt-2 mb-3">
                                            <span class="fw-bold">Note: </span>Please Refer
                                            support section for more information.
                                        </p>
                                        <a href="javascript:void(0)"
                                            class="btn btn-outline-warning tx-13">Click here</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 grid-item  px-0">
                                <div
                                    class="card card-collapsed faq-bg p-0 reveal">
                                    <div class="card-header grid-link"
                                        data-bs-toggle="card-collapse">
                                        <a href="#"
                                            class="card-options-collapse  h5 fw-bold card-title mb-0"><span
                                                class="me-3 fs-18 fw-bold text-primary">05.</span>Do
                                            you provide support ?</a>
                                    </div>
                                    <div class="card-body pt-0">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Iure quos debitis aliquam.
                                        </p>
                                        <p class="mt-2 mb-3">
                                            <span class="fw-bold">Note: </span>Please Refer
                                            support section for more information.
                                        </p>
                                        <a href="javascript:void(0)"
                                            class="btn btn-outline-danger tx-13">Click here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- FAQ's CLOSED -->


    

@endsection