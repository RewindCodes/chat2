@extends('layout.app')
@section('main')
    <!-- About -->
    <div class="" style="padding-bottom: 5rem" id="">
        <div class="container" style="width: 700px !important">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="main-content-app pt-0">
                            <div class="main-content-body main-content-body-chat h-100">
                                
                                <!-- main-chat-header -->
                                <div class="main-chat-body flex-2" id="ChatBody">
                                    <div class="content-inner">
                                        <div class="media chat-left">
                                            <div class="main-img-user online" style="width: 45px;height:45px;"><img alt="avatar" src="/assets/images/logo/logo.png"></div>
                                            <div class="media-body">
                                                <div class="main-msg-wrapper">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                                </div>
                                                <div>
                                                    <span>9:32 am</span> <a href="javascript:void(0)"><i class="icon ion-android-more-horizontal"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media chat-left">
                                            <div class="main-img-user online"><img alt="avatar" src="../assets/images/users/9.jpg"></div>
                                            <div class="media-body">
                                                <div class="main-msg-wrapper">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                                </div>
                                                <div>
                                                    <span>9:32 am</span> <a href="javascript:void(0)"><i class="icon ion-android-more-horizontal"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-chat-footer">
                                    <input class="form-control" placeholder="Type your message here..." type="text">
                                    <a class="nav-link" data-bs-toggle="tooltip" href="javascript:void(0)" title="Attach a File"><i class="fe fe-paperclip"></i></a>
                                    <button type="button" class="btn btn-icon  btn-primary brround"><i class="fa fa-paper-plane-o"></i></button>
                                    <nav class="nav">
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About CLOSED -->
@endsection