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
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logo/favicon.ico') }}" />

    <title>Checkout - Chat2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <style>
        .StripeElement {
            background-color: white;
            padding: 8px 12px;
            border-radius: 4px;
            border: 1px solid transparent;
            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
        }

        .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }

        .StripeElement--invalid {
            border-color: #fa755a;
        }

        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }

        /* Body CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
            font-family: 'Figtree', sans-serif
        }

        body{
            background-color:#f5f5f5;
        }

        .container {
            margin: 8% auto;
            width: 800px;
            padding: 30px;
        }

        .card.box1 {
            width: 400px;
            height: 400px;
            background-color: #000000;
            color: #bdbdbd;
            border-radius: 0
        }

        .card.box2 {
            width: 400px;
            height: 400px;
            background-color: #ffffff;
            border-radius: 0
        }

        .text {
            font-size: 13px
        }

        .box2 .btn.btn-primary.bar {
            width: 20px;
            background-color: transparent;
            border: none;
            color: #000000
        }

        .box2 .btn.btn-primary.bar:hover {
            color: #baf0c3
        }

        .box1 .btn.btn-primary {
            background-color: #000000;
            width: 45px;
            height: 45px;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid #000
        }

        .box1 .btn.btn-primary:hover {
            background-color: #202020;
            color: #ffffff
        }

        .btn.btn-success {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #ddd;
            color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            border: none
        }

        .nav.nav-tabs {
            border: none;
            border-bottom: 2px solid #ddd
        }

        .nav.nav-tabs .nav-item .nav-link {
            border: none;
            color: black;
            border-bottom: 2px solid transparent;
            font-size: 14px
        }

        .nav.nav-tabs .nav-item .nav-link:hover {
            border-bottom: 2px solid #3ecc6d;
            color: #05cf48
        }

        .nav.nav-tabs .nav-item .nav-link.active {
            border: none;
            border-bottom: 2px solid #3ecc6d
        }

        .form-control {
            border: none;
            border-bottom: 1px solid #ddd;
            box-shadow: none;
            height: 20px;
            font-weight: 600;
            font-size: 14px;
            padding: 15px 0px;
            letter-spacing: 1.5px;
            border-radius: 0
        }

        .inputWithIcon {
            position: relative
        }

        img {
            width: 50px;
            height: 20px;
            object-fit: cover
        }

        .inputWithIcon span {
            position: absolute;
            right: 0px;
            bottom: 9px;
            color: #57c97d;
            cursor: pointer;
            transition: 0.3s;
            font-size: 14px
        }

        .form-control:focus {
            box-shadow: none;
            border-bottom: 1px solid #ddd
        }

        .btn-outline-primary {
            color: black;
            background-color: #ddd;
            border: 1px solid #ddd
        }

        .btn-outline-primary:hover {
            background-color: #05cf48;
            border: 1px solid #ddd
        }

        .btn-check:active+.btn-outline-primary,
        .btn-check:checked+.btn-outline-primary,
        .btn-outline-primary.active,
        .btn-outline-primary.dropdown-toggle.show,
        .btn-outline-primary:active {
            color: #baf0c3;
            background-color: #3ecc6d;
            box-shadow: none;
            border: 1px solid #ddd
        }

        .btn-group>.btn-group:not(:last-child)>.btn,
        .btn-group>.btn:not(:last-child):not(.dropdown-toggle),
        .btn-group>.btn-group:not(:first-child)>.btn,
        .btn-group>.btn:nth-child(n+3),
        .btn-group>:not(.btn-check)+.btn {
            border-radius: 50px;
            margin-right: 20px
        }

        form {
            font-size: 14px
        }

        form .btn.btn-primary {
            width: 100%;
            height: 45px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #000000;
            border: 1px solid #ddd
        }

        form .btn.btn-primary:hover {
            background-color: #1e1f1e;
        }

        @media (max-width:750px) {
            .container {
                padding: 10px;
                width: 100%
            }

            .text-green {
                font-size: 14px
            }

            .card.box1,
            .card.box2 {
                width: 100%
            }

            .nav.nav-tabs .nav-item .nav-link {
                font-size: 12px
            }
        }
    </style>


<div class="container d-md-flex align-items-center" > 
    <div class="card box1 shadow-sm p-md-5 p-md-5 p-4"> 
        <div class="fw-bolder">
            <span class="ps-1">{{ $plan->name }} Plan</span>
        </div> 
        <div class="" style="font-size: 14px">
            <span class="ps-1">{{ $plan->billing_method }}</span>
        </div>
        <div class="fw-bolder mb-4">
            <span class="ps-1 text-white" style="font-size: 38px">${{ $plan->price }}</span>
        </div>
        <div class="d-flex flex-column"> 
             
            <div class="d-flex align-items-center justify-content-between text mb-4"> 
                <span>Sub Total: </span> 
                <span class="fas fa-dollar-sign">
                    <span class="ps-1">${{ $plan->price }}</span>
                </span> 
            </div> 
            <div class="border-bottom mb-4"></div> 
            <div class="d-flex align-items-center justify-content-between text mb-4"> 
                <span>Total: </span> 
                <span class="fas fa-dollar-sign">
                    <span class="ps-1">${{ $plan->price }}</span>
                </span> 
            </div> 

        </div> 
    </div> 
    <div class="card box2 shadow-sm"> 
        <div class="d-flex align-items-center justify-content-between p-md-5 p-4"> 
            <span class="h5 fw-bold m-0">Confirm your payment</span> 
            @include('errors')
        </div> 
 
            <form action="{{ route('plan.process',$user->id)}}" method="POST" id="subscribe-form"> 
                @csrf
                <div class="row">  
                        <div class="col-12"> 
                            <div class="d-flex flex-column px-md-5 px-4 mb-4"> 
                                <span>Name on card</span> 
                                <div class="inputWithIcon"> 
                                    <input id="" type="hidden" name="plan_id" value="{{ $plan->plan_id }}"
                                    class="form-control">
                                    <input id="" type="hidden" name="plan_name" value="{{ $plan->name }}"
                                    class="form-control">
                                    <input id="" type="hidden" name="billing_period" value="{{ $plan->billing_method }}"
                                    class="form-control">
                                    <input id="card-holder-name" class="form-control text-uppercase" type="text"> 
                                    <span class="far fa-user"></span> 
                                </div> 
                            </div> 
                        </div> 
                        <div class="col-12"> 
                            <div class="d-flex flex-column px-md-5 px-4 mb-4"> 
                                <span>Card information</span> 
                                <div for="card-element"> 
                                    <div id="card-element" class="form-control">
                                    </div>
                                    <!-- Used to display form errors. -->
                                    <div id="card-errors" role="alert"></div> 
                                </div> 
                            </div> 
                        </div>
                        <div class="stripe-errors"></div>
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    {{ $error }}<br>
                                @endforeach
                            </div>
                        @endif
                        <div class="col-12 px-md-5 px-4 mt-3"> 
                            <button id="card-button" data-secret="{{ $intent->client_secret }}"
                            class="btn btn-primary w-100">Pay</button> 
                        </div> 
                    </div> 
                </form> 
            </div> 
        </div>



<script src="https://js.stripe.com/v3/"></script>
    <script>
        var stripe = Stripe('{{ env('STRIPE_KEY') }}');
        var elements = stripe.elements();
        var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '14px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };
        var card = elements.create('card', {
            hidePostalCode: true,
            style: style
        });
        card.mount('#card-element');
        card.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });
        const cardHolderName = document.getElementById('card-holder-name');
        const cardButton = document.getElementById('card-button');
        const clientSecret = cardButton.dataset.secret;
        cardButton.addEventListener('click', async (e) => {
            e.preventDefault();
            console.log("attempting");
            const {
                setupIntent,
                error
            } = await stripe.confirmCardSetup(
                clientSecret, {
                    payment_method: {
                        card: card,
                        billing_details: {
                            name: cardHolderName.value
                        }
                    }
                }
            );
            if (error) {
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = error.message;
            } else {
                paymentMethodHandler(setupIntent.payment_method);
            }
        });

        function paymentMethodHandler(payment_method) {
            var form = document.getElementById('subscribe-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'payment_method');
            hiddenInput.setAttribute('value', payment_method);
            form.appendChild(hiddenInput);
            form.submit();
        }
    </script>
</body>

</html>
