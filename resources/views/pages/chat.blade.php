@extends('layout.app')
@section('main')
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <!-- About -->
    <div class="" style="padding-bottom: 5rem" id="">
        <div class="container" style="width: 700px !important">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="main-content-app pt-0">
                            <div class="main-content-body main-content-body-chat h-100">

                                <!-- main-chat-header -->
                                <div class="main-chat-body flex-2" id="ChatBody" style="font-size: 16px">
                                    <!-- existing messages -->
                                </div>
                                {{-- main chat end  --}}
                                <form action="{{route('chatting')}}" method="POST" id="message-form">
                                    @csrf
                                <div class="main-chat-footer">

                                    <input class="form-control" name="message" placeholder="Type your message here..." type="text">
                                    <button type="submit" id="submit" class="btn btn-icon  btn-primary brround" ><i class="fa fa-paper-plane-o"></i><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" style="display: none"></span></button>
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
    <script>
        $(function() {
            // submit message form via AJAX
            $('#message-form').submit(function(e) {
                e.preventDefault();
                var $form = $(this);
                $.ajax({
                    url: $form.attr('action'),
                    type: $form.attr('method'),
                    data: $form.serialize(),
                    success: function(data) {
                        // clear input field and focus it for next message
                        $form.find('input[name=message]').val('').focus();
                    }
                });
            });
    
            // periodically check for new messages via AJAX
            setInterval(function() {
                $.ajax({
                    url: "{{ route('get-messages') }}",
                    success: function(data) {
                        $('#ChatBody').html(data);
                    }
                });
            }, 5000); // every 5 seconds
        });
    </script>
@endsection



