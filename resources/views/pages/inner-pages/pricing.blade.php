@extends('layout.app')
@section('main')



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






@endsection
