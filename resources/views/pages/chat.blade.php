@extends('layout.app')
@section('main')
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <!-- About -->
    <div class="" style="padding-bottom: 5rem" id="">
        <div class="container" style="width: 700px !important">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card" style="margin-top:40px">
                        <div class="main-content-app pt-0">
                            <div class="main-content-body main-content-body-chat h-100">

                                <!-- main-chat-header -->
                                
                                <div class="main-chat-body flex-2" id="ChatBody" style="font-size: 16px">
                                    <!-- existing messages -->
                                    @if(!isset($messages) || count($messages) === 0)
                                    <div class="text-center">
                                        <h3 class="text-gray">Chat2</h3>
                                        <p>Write your messages and start chatting!</p>
                                        <div class="blank" style="padding: 20px 0"></div>
                                        <i class="fa fa-lightbulb-o" style="color: #404040; font-size: 30px;"></i><br/>
                                        <h4>Examples</h4>
                                        <div class="main-msg-wrapper copy-div" style="cursor: pointer">Explain quantum computing in simple terms</div><br/>
                                        <div class="main-msg-wrapper copy-div" style="cursor: pointer">Got any creative ideas for a 10 year old’s birthday?</div><br/>
                                        <div class="main-msg-wrapper copy-div" style="cursor: pointer">How do I make an HTTP request in Javascript?</div><br/>
                                        <div class="main-msg-wrapper copy-div" style="cursor: pointer; background: rgb(92, 92, 92); color:white;">Clear</div>
                                    </div>
                                    @endif
                                </div>
                                {{-- main chat end  --}}
                                <form action="{{route('chatting')}}" method="POST" id="message-form">
                                    @csrf
                                <div class="main-chat-footer">

                                    <input class="form-control" name="message" placeholder="Type your message here..." type="text" id="copy-input" value="">
                                    <button type="submit" id="submit" class="btn btn-icon  btn-primary brround" ><i class="fa fa-paper-plane-o"></i></button>
                                    
                                    <!-- GLOBAL-LOADER -->
                                    <div id="global-loader" style="display: none">
                                        <div class="dimmer active">
                                            <div class="lds-hourglass" style="margin-top: 22%">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /GLOBAL-LOADER -->
                                </div>
                                <div class="reset-convo text-center">
                                    <a class="btn btn-sm btn-default-light" href="{{ route('chat.reset') }}">Reset Conversation
                                    </a>
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
        $(document).ready(function() {
        $('.copy-div').on('click', function() {
            $('#copy-input').val($(this).text());
        });

        $('.copy-div:last').on('click', function() {
            $('#copy-input').replaceWith($('<input class="form-control" name="message" placeholder="Type your message here..." type="text" >').attr({
            type: 'text',
            id: 'copy-input'
            }));
        });
        });


        $(function() {
            // submit message form via AJAX
            $('#message-form').submit(function(e) {
                e.preventDefault();
                var $form = $(this);
                $('#global-loader').show();
                $.ajax({
                    url: $form.attr('action'),
                    type: $form.attr('method'),
                    data: $form.serialize(),
                    success: function(data) {
                        // clear input field and focus it for next message
                        $form.find('input[name=message]').val('').focus();
                        // scroll to the bottom of the main chat body
                        var chatBody = $('#ChatBody');
                        chatBody.scrollTop(chatBody.prop("scrollHeight"));
                    }
                });
            });
    
            // periodically check for new messages via AJAX
            setInterval(function() {
                $.ajax({
                    url: "{{ route('get-messages') }}",
                    success: function(data) {
                        $('#ChatBody').html(data);
                    },
                    complete: function() {
                $('#global-loader').hide(); // hide the loader
            }
                });
            }, 5000); // every 5 seconds
        });

    </script>
@endsection



