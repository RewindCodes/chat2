<!DOCTYPE html>
<html lang="en">
<head>
        <!-- META DATA -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Chat2">
        <meta name="author" content="Rewind Codes Technologies Inc.">
        <meta name="keywords"
            content="OpenAI chat, ChatGPT, GPT-3, GPT-4">
    
        <!-- FAVICON -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/favicon.ico" />
    
        <!-- TITLE -->
        <title>Forgot password - Chat2</title>
    
        <!-- BOOTSTRAP CSS -->
        <link id="style" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    
        <!-- STYLE CSS -->
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/css/dark-style.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/css/transparent-style.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/skin-modes.css')}}" rel="stylesheet" />
    
        <!--- FONT-ICONS CSS -->
        <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" />
    
        <!-- COLOR SKIN CSS -->
        <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('assets/colors/color1.css')}}" />
    
        <!-- GOOGLE FONT -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>




{{-- Main --}}
<body class="app sidebar-mini ltr login-img">

    <!-- BACKGROUND-IMAGE -->
    <div class="">


        <!-- PAGE -->
        <div class="page" style="background-color: #f5f5f5">
            <div class="">

                <!-- CONTAINER OPEN -->
                <div class="col col-login mx-auto">
                    <div class="text-center">
                        <a href="{{ route('home') }}"><img src="{{asset('assets/images/logo/logo.png')}}" style="width: 66px" class="header-brand-img" alt=""></a>
                    </div>
                </div>

                <!-- CONTAINER OPEN -->
                <div class="container-login100">
                    <div class="wrap-login100 p-6">
                        <form class="login100-form validate-form" action="{{ route('forget.password.post') }}" method="POST">
                            @csrf
                            <span class="login100-form-title pb-5">
                                Forgot Password
                            </span>
                            <p class="text-muted">Enter the email address registered on your account</p>
                            @if (Session::has('message'))
                               <div class="alert alert-success" role="alert">
                                  {{ Session::get('message') }}
                              </div>
                            @endif
                            <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                    <i class="zmdi zmdi-email" aria-hidden="true"></i>
                                </a>
                                <input class="input100 border-start-0 ms-0 form-control" placeholder="Email" type="text" id="email_address" name="email" required autofocus>
                                @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="submit d-grid gap-2">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                            <div class="text-center mt-4">
                                <p class="text-dark mb-0">Forgot It?<a class="text-dark ms-1" href="{{ route('login') }}">Send me Back</a></p>
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--END PAGE -->

    </div>
    <!-- BACKGROUND-IMAGE CLOSED -->

    <!-- JQUERY JS -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SHOW PASSWORD JS -->
    <script src="assets/js/show-password.min.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="assets/plugins/p-scroll/perfect-scrollbar.js"></script>

    <!-- Color Theme js -->
    <script src="assets/js/themeColors.js"></script>

    <!-- CUSTOM JS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
