@foreach ($messages as $message)
    <div class="content-inner">
        <div class="ml-4">
            <div class="text-lg">
                @if ($message['role'] === 'assistant')
                    <a style="font-size: 16px" href="" class="font-medium text-gray-900 badge rounded-pill bg-primary badge-sm me-1 mb-1 mt-1">Chat2</a>
                @else
                    <a style="font-size: 16px" href="" class="font-medium text-gray-900 badge rounded-pill bg-default badge-sm me-1 mb-1 mt-1">You</a>
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