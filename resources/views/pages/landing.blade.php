@extends('layout.app')
@section('main')

    {{-- HERO Section --}}
    <div class="demo-screen-headline main-demo main-demo-1 spacing-top overflow-hidden reveal" id="home">
        <div class="container px-sm-0">
            <div class="row">
            {{--    @if (\Session::has('message'))
                           <div class="alert alert-danger">
                              <ul>
                                     <li>{!! \Session::get('message') !!}</li>
                               </ul>
                            </div>
                    @endif --}}
                <div class="col-xl-12 col-lg-12 mb-5 pb-5 animation-zidex pos-relative text-center">
                    <h4 class="fw-semibold mt-7">Effortlessly Communicate</h4>
                    <h1 class="fw-bold">Chat2 AI: Your Personal Conversational Assistant</h1>
                    <h4 class="pb-3 mx-4 leading-normal">
                        Experience seamless communication with Chat2, the powerful AI chat app <br>that will revolutionize the way you chat.
                    </h4>

                    <a href="{{ route('chat') }}"
                        target="_blank" class="btn ripple btn-min w-lg mb-3 me-2 btn-primary"><i
                            class="fe fe-play me-2"></i> Get Started
                    </a>
                    <a href="{{ route('about.page') }}"
                        class="btn ripple btn-min w-lg btn-outline-primary mb-3 me-2" target="_blank"><i
                            class="fe fe-eye me-2"></i>About us
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
                                            <h2 class="text-start fw-semibold fs-25 mb-6">Empowering Conversations: Your virtual assistant for seamless communication
                                            </h2>
                                            <div class="d-flex">
                                                <i class="fe fe-check-circle me-2"></i>
                                                <div class="ms-5 mb-4">
                                                    <h5 class="fw-bold">Natural Language Processing
                                                    </h5>
                                                    <p>Chat2 utilizes advanced NLP algorithms to understand and respond to your queries in a human-like manner.</p>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <i class="fe fe-check-circle me-2"></i>
                                                <div class="ms-5 mb-4">
                                                    <h5 class="fw-bold">Personalization</h5>
                                                    <p>
                                                        Chat2 remembers your preferences and adapts to your communication style, providing a personalized experience every time you chat.
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

                        {{-- Yearly Package: Start --}}
                        <div class="tab-pane pb-0 active show" id="annualyear">
                            <div class="row d-flex align-items-center justify-content-center">
                                <div class="col-lg-4 col-xl-4 col-md-8 col-sm-12">
                                    <div class="card p-3 pricing-card reveal revealrotate">
                                        <div class="card-header d-block text-justified pt-2">
                                            <p class="fs-18 fw-semibold mb-1">{{$basic_by_year->name}}</p>
                                            <p class="text-justify fw-semibold mb-1"> <span
                                                    class="fs-30 me-2">$</span><span
                                                    class="fs-30 me-1">{{$basic_by_year->price}}</span><span
                                                    class="fs-25"><span
                                                        class="op-0-5 text-muted text-20">/</span>
                                                    year</span></p>
                                            <p class="fs-13 mb-1">The Basic package is suitable for small-scale chatbot applications that require basic conversational abilities.</p>
                                            <p class="fs-13 mb-1 text-secondary">Billed yearly
                                                on regular basis!</p>
                                        </div>
                                        <div class="card-body pt-2">
                                            <ul class="text-justify pricing-body ps-0">
                                                <li><i
                                                        class="mdi mdi-checkbox-marked-circle-outline p-2 fs-16 text-secondary"></i><strong>
                                                            ChatGPT-like Chat Feature</strong></li>
                                                <li>
                                                    <i class="mdi mdi-checkbox-marked-circle-outline p-2 fs-16 text-secondary"></i>
                                                    <strong></strong>Responses to common questions
                                                </li>
                                                <li class=""><i
                                                        class="mdi mdi-checkbox-marked-circle-outline p-2 fs-16 text-secondary"></i><strong></strong> Basic chatbot interface</li>
                                                <li class="text-muted"><i
                                                        class="mdi mdi-close-circle-outline p-2 fs-16 text-danger"></i><strong>
                                                        </strong>More accurate understanding</li>
                                                <li class="text-muted"><i
                                                        class="mdi mdi-close-circle-outline p-2 fs-16 text-danger"></i><strong></strong> Guaranteed response times</li>
                                                <li class="text-muted"><i
                                                        class="mdi mdi-close-circle-outline p-2 fs-16 text-danger"></i><strong>
                                                        24/7</strong> support</li>
                                            </ul>
                                        </div>
                                        <div class="card-footer text-center border-top-0 pt-1">
                                            <a href="{{route('plan.checkout',$basic_by_year->plan_id)}}"
                                                class="btn btn-lg btn-outline-primary btn-block">
                                                <span class="ms-4 me-4">Select</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-md-8 col-sm-12">
                                    <div
                                        class="card p-3 border-primary pricing-card advanced reveal revealrotate">
                                        <div class="card-header d-block text-justified pt-2">
                                            <p class="fs-18 fw-semibold mb-1 pe-0">{{$advanced_by_year->name}}<span
                                                    class="tag bg-primary text-white float-end">Limited
                                                    Deal</span></p>
                                            <p class="text-justify fw-semibold mb-1"> <span
                                                    class="fs-30 me-2">$</span><span
                                                    class="fs-30 me-1">{{$advanced_by_year->price}}</span><span
                                                    class="fs-25"><span
                                                        class="op-0-5 text-muted text-20">/</span>
                                                    year</span></p>
                                            <p class="fs-13 mb-2">The Advanced package is for large-scale chatbot applications with complex conversational abilities and integration needs.</p>
                                            <p class="fs-13 mb-1 text-primary">Billed yearly on
                                                regular basis!</p>
                                        </div>
                                        <div class="card-body pt-2">
                                            <ul class="text-justify pricing-body ps-0">
                                                <li><i
                                                        class="mdi mdi-checkbox-marked-circle-outline p-2 fs-16 text-secondary"></i><strong>
                                                            ChatGPT-like Chat Feature</strong></li>
                                                <li>
                                                    <i class="mdi mdi-checkbox-marked-circle-outline p-2 fs-16 text-secondary"></i>
                                                    <strong></strong>Responses to common questions
                                                </li>
                                                <li class=""><i
                                                        class="mdi mdi-checkbox-marked-circle-outline p-2 fs-16 text-secondary"></i><strong></strong> Basic chatbot interface</li>
                                                <li class=""><i
                                                        class="mdi mdi-checkbox-marked-circle-outline p-2 fs-16 text-secondary"></i><strong>
                                                        </strong>More accurate understanding</li>
                                                <li class=""><i
                                                        class="mdi mdi-checkbox-marked-circle-outline p-2 fs-16 text-secondary"></i><strong></strong> Guaranteed response times</li>
                                                <li class=""><i
                                                        class="mdi mdi-checkbox-marked-circle-outline p-2 fs-16 text-secondary"></i><strong>
                                                        24/7</strong> support</li>
                                            </ul>
                                        </div>
                                        <div class="card-footer text-center border-top-0 pt-1">
                                            <a href="{{route('plan.checkout',$advanced_by_year->plan_id)}}"
                                                class="btn btn-lg btn-outline-primary btn-block">
                                                <span class="ms-4 me-4">Select</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-md-8 col-sm-12">
                                    <div class="card p-3 pricing-card reveal revealrotate">
                                        <div class="card-header d-block text-justified pt-2">
                                            <p class="fs-18 fw-semibold mb-1">{{$regular_by_year->name}}</p>
                                            <p class="text-justify fw-semibold mb-1"> <span
                                                    class="fs-30 me-2">$</span><span
                                                    class="fs-30 me-1">{{$regular_by_year->price}}</span><span
                                                    class="fs-25"><span
                                                        class="op-0-5 text-muted text-20">/</span>
                                                    year</span></p>
                                            <p class="fs-13 mb-1">The Regular package is designed for businesses and organizations that require more advanced chatbot features and capabilities.</p>
                                            <p class="fs-13 mb-1  text-danger">Billed yearly on
                                                regular basis!</p>
                                        </div>
                                        <div class="card-body pt-2">
                                            <ul class="text-justify pricing-body ps-0">
                                                <li><i
                                                        class="mdi mdi-checkbox-marked-circle-outline p-2 fs-16 text-secondary"></i><strong>
                                                            ChatGPT-like Chat Feature</strong></li>
                                                <li>
                                                    <i class="mdi mdi-checkbox-marked-circle-outline p-2 fs-16 text-secondary"></i>
                                                    <strong></strong>Responses to common questions
                                                </li>
                                                <li class=""><i
                                                        class="mdi mdi-checkbox-marked-circle-outline p-2 fs-16 text-secondary"></i><strong></strong> Basic chatbot interface</li>
                                                <li class=""><i
                                                        class="mdi mdi-checkbox-marked-circle-outline p-2 fs-16 text-secondary"></i><strong>
                                                        </strong>More accurate understanding</li>
                                                <li class="text-muted"><i
                                                        class="mdi mdi-close-circle-outline p-2 fs-16 text-danger"></i><strong></strong> Guaranteed response times</li>
                                                <li class="text-muted"><i
                                                        class="mdi mdi-close-circle-outline p-2 fs-16 text-danger"></i><strong>
                                                        24/7</strong> support</li>
                                            </ul>
                                        </div>
                                        <div class="card-footer text-center border-top-0 pt-1">
                                            <a href="{{route('plan.checkout',$regular_by_year->plan_id)}}"
                                                class="btn btn-lg btn-outline-primary btn-block">
                                                <span class="ms-4 me-4">Select</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Yearly Package: End --}}

                        {{-- Monthly Package: Start --}}
                        <div class="tab-pane" id="month">
                            <div class="row d-flex align-items-center justify-content-center">
                                <div class="col-lg-4 col-xl-4 col-md-8 col-sm-12">
                                    <div class="card p-3 pricing-card">
                                        <div class="card-header d-block text-justified pt-2">
                                            <p class="fs-18 fw-semibold mb-1">{{$basic_by_month->name}}</p>
                                            <p class="text-justify fw-semibold mb-1"> <span
                                                    class="fs-30 me-2">$</span><span
                                                    class="fs-30 me-1">{{$basic_by_month->price}}</span><span
                                                    class="fs-25"><span
                                                        class="op-0-5 text-muted text-20">/</span>
                                                    month</span></p>
                                            <p class="fs-13 mb-1">The Basic package is suitable for small-scale chatbot applications that require basic conversational abilities.</p>
                                            <p class="fs-13 mb-1 text-secondary">Billed monthly
                                                on regular basis!</p>
                                        </div>
                                        <div class="card-body pt-2">
                                            <ul class="text-justify pricing-body ps-0">
                                                <li><i
                                                        class="mdi mdi-checkbox-marked-circle-outline p-2 fs-16 text-secondary"></i><strong>
                                                            ChatGPT-like Chat Feature</strong></li>
                                                <li>
                                                    <i class="mdi mdi-checkbox-marked-circle-outline p-2 fs-16 text-secondary"></i>
                                                    <strong></strong>Responses to common questions
                                                </li>
                                                <li class=""><i
                                                        class="mdi mdi-checkbox-marked-circle-outline p-2 fs-16 text-secondary"></i><strong></strong> Basic chatbot interface</li>
                                                <li class="text-muted"><i
                                                        class="mdi mdi-close-circle-outline p-2 fs-16 text-danger"></i><strong>
                                                        </strong>More accurate understanding</li>
                                                <li class="text-muted"><i
                                                        class="mdi mdi-close-circle-outline p-2 fs-16 text-danger"></i><strong></strong> Guaranteed response times</li>
                                                <li class="text-muted"><i
                                                        class="mdi mdi-close-circle-outline p-2 fs-16 text-danger"></i><strong>
                                                        24/7</strong> support</li>
                                            </ul>
                                        </div>
                                        <div class="card-footer text-center border-top-0 pt-1">
                                            <a href="{{route('plan.checkout',$basic_by_month->plan_id)}}"
                                                class="btn btn-lg btn-outline-primary btn-block">
                                                <span class="ms-4 me-4">Select</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-md-8 col-sm-12">
                                    <div class="card p-3 border-primary pricing-card advanced">
                                        <div class="card-header d-block text-justified pt-2">
                                            <p class="fs-18 fw-semibold mb-1 pe-0">{{$advanced_by_month->name}}<span
                                                    class="tag bg-primary text-white float-end">Limited
                                                    Deal</span></p>
                                            <p class="text-justify fw-semibold mb-1"> <span
                                                    class="fs-30 me-2">$</span><span
                                                    class="fs-30 me-1">{{$advanced_by_month->price}}</span><span
                                                    class="fs-25"><span
                                                        class="op-0-5 text-muted text-20">/</span>
                                                    month</span></p>
                                            <p class="fs-13 mb-2">The Advanced package is for large-scale chatbot applications with complex conversational abilities and integration needs.</p>
                                            <p class="fs-13 mb-1 text-primary">Billed monthly on
                                                regular basis!</p>
                                        </div>
                                        <div class="card-body pt-2">
                                            <ul class="text-justify pricing-body ps-0">
                                                <li><i
                                                        class="mdi mdi-checkbox-marked-circle-outline p-2 fs-16 text-secondary"></i><strong>
                                                            ChatGPT-like Chat Feature</strong></li>
                                                <li>
                                                    <i class="mdi mdi-checkbox-marked-circle-outline p-2 fs-16 text-secondary"></i>
                                                    <strong></strong>Responses to common questions
                                                </li>
                                                <li class=""><i
                                                        class="mdi mdi-checkbox-marked-circle-outline p-2 fs-16 text-secondary"></i><strong></strong> Basic chatbot interface</li>
                                                <li class=""><i
                                                        class="mdi mdi-checkbox-marked-circle-outline p-2 fs-16 text-secondary"></i><strong>
                                                        </strong>More accurate understanding</li>
                                                <li class=""><i
                                                        class="mdi mdi-checkbox-marked-circle-outline p-2 fs-16 text-secondary"></i><strong></strong> Guaranteed response times</li>
                                                <li class=""><i
                                                        class="mdi mdi-checkbox-marked-circle-outline p-2 fs-16 text-secondary"></i><strong>
                                                        24/7</strong> support</li>
                                            </ul>
                                        </div>
                                        <div class="card-footer text-center border-top-0 pt-1">
                                            <a href="{{route('plan.checkout',$advanced_by_month->plan_id)}}"
                                                class="btn btn-lg btn-outline-primary btn-block">
                                                <span class="ms-4 me-4">Select</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-md-8 col-sm-12">
                                    <div class="card p-3 pricing-card">
                                        <div class="card-header d-block text-justified pt-2">
                                            <p class="fs-18 fw-semibold mb-1">{{$regular_by_month->name}}</p>
                                            <p class="text-justify fw-semibold mb-1"> <span
                                                    class="fs-30 me-2">$</span><span
                                                    class="fs-30 me-1">{{$regular_by_month->price}}</span><span
                                                    class="fs-25"><span
                                                        class="op-0-5 text-muted text-20">/</span>
                                                    month</span></p>
                                            <p class="fs-13 mb-1">The Regular package is designed for businesses and organizations that require more advanced chatbot features and capabilities.</p>
                                            <p class="fs-13 mb-1  text-danger">Billed monthly on
                                                regular basis!</p>
                                        </div>
                                        <div class="card-body pt-2">
                                            <ul class="text-justify pricing-body ps-0">
                                                <li><i
                                                        class="mdi mdi-checkbox-marked-circle-outline p-2 fs-16 text-secondary"></i><strong>
                                                            ChatGPT-like Chat Feature</strong></li>
                                                <li>
                                                    <i class="mdi mdi-checkbox-marked-circle-outline p-2 fs-16 text-secondary"></i>
                                                    <strong></strong>Responses to common questions
                                                </li>
                                                <li class=""><i
                                                        class="mdi mdi-checkbox-marked-circle-outline p-2 fs-16 text-secondary"></i><strong></strong> Basic chatbot interface</li>
                                                <li class=""><i
                                                        class="mdi mdi-checkbox-marked-circle-outline p-2 fs-16 text-secondary"></i><strong>
                                                        </strong>More accurate understanding</li>
                                                <li class="text-muted"><i
                                                        class="mdi mdi-close-circle-outline p-2 fs-16 text-danger"></i><strong></strong> Guaranteed response times</li>
                                                <li class="text-muted"><i
                                                        class="mdi mdi-close-circle-outline p-2 fs-16 text-danger"></i><strong>
                                                        24/7</strong> support</li>
                                            </ul>
                                        </div>
                                        <div class="card-footer text-center border-top-0 pt-1">
                                            <a href="{{route('plan.checkout',$regular_by_month->plan_id)}}"
                                                class="btn btn-lg btn-outline-primary btn-block">
                                                <span class="ms-4 me-4">Select</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Monthly Package: Start --}}

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
                                                class="me-3 fs-18 fw-bold text-primary">01.</span>What is a chatbot and how does it work?</a>
                                    </div>
                                    <div class="card-body pt-0">
                                        <p>
                                            A chatbot is an artificial intelligence software that can simulate a conversation with a user in natural language. It works by using machine learning algorithms to understand user input, identify the intent behind it, and provide a relevant response.
                                        </p>
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
                                                class="me-3 fs-18 fw-bold text-primary">02.</span>Can I customize the chatbot's responses?</a>
                                    </div>
                                    <div class="card-body pt-0">
                                        <p>
                                            Yes, you can customize the chatbot's responses to suit your specific requirements. You can redefine the chatbot's responses by giving a continuation of prompts, it will track your requests.
                                        </p>
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
                                                class="me-3 fs-18 fw-bold text-primary">03.</span>How do I train my chatbot to understand user input?</a>
                                    </div>
                                    <div class="card-body pt-0">
                                        <p>
                                            You can train your chatbot using natural language processing (NLP) techniques. The ChatGPT clone application uses machine learning algorithms to understand user input and identify the intent behind it.
                                        </p>
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
                                            You will get email notifications for future updates.
                                        </p>
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
                                            Yes, support is provided in Regular and Advanced packages.
                                        </p>
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
                                                class="me-3 fs-18 fw-bold text-primary"></span></a>
                                    </div>
                                    <div class="card-body pt-0">
                                        <p>
                                            
                                        </p>
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
