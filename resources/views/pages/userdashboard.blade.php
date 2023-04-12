@extends('layout.app')
@section('main')
    {{-- ======================css start======================================= --}}
    <style>
        /* The switch - the box around the slider */
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        /* Hide default HTML checkbox */
        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        /* The slider */
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked+.slider {
            background-color: #2196F3;
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>
    {{-- ======================css end======================================= --}}
    <!-- About -->
    <div class="" style="padding-bottom: 5rem" id="">
        <div class="container" style="width: 700px !important">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mt-7">
                        <div class="main-content-app pt-0">
                            <div class="main-content-body main-content-body-chat h-100">


                                <table class="table table-dark" style="border-radius: 8px">
                                    <thead>
                                        <th>Plan name</th>
                                        {{-- <th>subs name</th> --}}
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Billing Period</th>
                                        <th>Started at</th>
                                        <th>Auto Renew</th>
                                    </thead>
                                    <tbody>
                                        @forelse ($subscription as $sub)
                                        <tr>
                                            <td>{{ $sub->userplan->name}}</td>
                                           
                                            <td>${{$sub->userplan->price}}</td>
                                            <td>{{$sub->quantity}}</td>
                                            <td>{{$sub->userplan->billing_method}}</td>
                                            <td>{{$sub->created_at->diffForHumans()}}</td>
                                            <td>
                                               <!-- Rounded switch -->
                                                <label class="custom-switch m-0">
                                                    @if ($sub->ends_at ==null)
                                                    <input id="checkbox" type="checkbox" class="custom-switch-input" checked value="{{$sub->name}}">
                                                    @else
                                                    <input id="checkbox" type="checkbox" class="custom-switch-input" value="{{$sub->name}}">
                                                    @endif
                                                    <span class="custom-switch-indicator"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        @empty
                                        <td colspan="6" class="text-center">No data !</td>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- data submit form start --}}

    {{-- data submit form end --}}
    <!-- About CLOSED -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script>
          $(document).ready(function(){
        $('#checkbox').click(function(){
            var subscriptionName=$('#checkbox').val();
            if($(this).is(':checked')){
                $.ajax({
                    url:'{{ route('subcription.resume')}}',
                    data:{subscriptionName},
                    type:"GET",
                    success:function(response){
                      console.log(response);
                    },
                    error:function(response){

                    }
                })

            }else{
                $.ajax({
                    url:'{{ route('subcription.cancel')}}',
                    data:{subscriptionName},
                    type:"GET",
                    success:function(response){
                      console.log(response);
                    },
                    error:function(response){

                    }
                })
            }
        })
    });
    </script>
@endsection

