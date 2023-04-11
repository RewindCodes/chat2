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


                                      @foreach ( $messages as $message )


                                    <div class="content-inner">
                                        {{-- <div class="media chat-left">
                                            <div class="main-img-user online" style="width: 45px;height:45px;">
                                                <img alt="avatar" src="/assets/images/users/9.jpg">

                                            </div>
                                            <div class="media-body">
                                                <div class="main-msg-wrapper">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. nazmul hossain babu
                                                </div>
                                                <div>
                                                    <span>9:32 am</span> <a href="javascript:void(0)"><i class="icon ion-android-more-horizontal"></i></a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="media chat-left">
                                            <div class="main-img-user online">
                                                <img alt="avatar" src="../assets/images/logo/logo.png">

                                            </div>
                                            <div class="media-body">
                                                <div class="main-msg-wrapper">
                                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic aut nemo pariatur accusamus numquam necessitatibus! Quia error perferendis, quisquam earum dolore laboriosam, laudantium animi id provident, eveniet ut! Corporis, ullam.
                                                </div>
                                                <div>
                                                    <span>9:32 am</span> <a href="javascript:void(0)"><i class="icon ion-android-more-horizontal"></i></a>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="ml-4">
                                            <div class="text-lg">
                                                @if ($message['role'] === 'assistant')
                                                    <a href="#" class="font-medium text-gray-900">LaravelGPT</a>
                                                @else
                                                    <a href="#" class="font-medium text-gray-900">You</a>
                                                @endif
                                            </div>
                                            <div class="mt-1">
                                                <p class="text-gray-600">
                                                    {!! \Illuminate\Mail\Markdown::parse($message['content']) !!}
                                                </p>
                                            </div>
                                        </div>

                                    </div>

                                    @endforeach
                                </div>
                                {{-- main chat end  --}}
                                <form action="{{route('chatting')}}" method="POST" id="message-form">
                                    @csrf
                                <div class="main-chat-footer">

                                    <input class="form-control" name="message" placeholder="Type your message here..." type="text">
                                    <button type="submit" id="submit" class="btn btn-icon  btn-primary brround"><i class="fa fa-paper-plane-o"></i></button>
                                    <nav class="nav">
                                    </nav>

                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- data submit form end --}}
    <!-- About CLOSED -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script>
    //  $(document).ready(function(){
    //     $('#message-form').submit(function(){
    //         $.ajax({
    //             url:'{{ route('chatting')}}',
    //                 data:{subscriptionName},
    //                 type:"POST",
    //                 success:function(response){
    //                   console.log(response);
    //                 },
    //                 error:function(response){

    //                 }
    //         });
    //     });
    //  })
    </script>
@endsection
