<div class="flex p-4 {{ $loop->last ? '' : 'border-b border-b-gray-400' }}">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ $tweet->user->path() }}">
            <img 
                src="{{ $tweet->user->avatar }}" 
                alt=""
                class="rounded-full mr-2 hover:opacity-75"
                width="50"
                height="50"
                style="max-height:50px;"
            >
        </a>
    </div>

    <div>
        <h5 class="font-bold hover:opacity-75">
            <a href="{{ $tweet->user->path() }}">
                {{ $tweet->user->name }} ·
            </a>

            <a href="{{ $tweet->user->path() }}" class="text-gray-800 text-sm font-normal">
                {{ $tweet->created_at->diffForHumans() }}
            </a>
        </h5>

        <h5 class="mb-4 hover:opacity-75">
            <a href="{{ $tweet->user->path() }}">
                {{ '@' . $tweet->user->username }}
            </a>
        </h5>

        <p class="text-base mb-3">
            {{ $tweet->body }}
        </p>

        @isset($tweet->image)
        <img src="{{ $tweet->image }}" alt="image" class="pb-4" style="max-height:40vh;">
        @endisset

        @empty($tweet->image)
        <!-- don't show image tag if user didn't attach image to tweet -->
        @endempty
        <x-like-buttons :tweet="$tweet" />
    </div>
</div>