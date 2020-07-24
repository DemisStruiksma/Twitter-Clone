<x-app>
    <header class="mb-6 relative">
    <div class="relative">
        <img 
                src="https://source.unsplash.com/700x223" 
                alt=""
                class="mb-2 rounded-lg"
            >

            <img 
                src="{{ $user->avatar }}" 
                alt=""
                class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                style="left:50%;"
                width= "150px"
            >
    </div>
        
        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                @can ('edit', $user)
                <a 
                href="{{ $user->path('edit') }}" 
                class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2"
                
                >Edit Profile</a>
            @endcan

                <x-follow-button :user="$user"></x-follow-button>
            </div>       
        </div>

        <p class="text-sm">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rutrum velit massa, eu suscipit neque lobortis dictum. 
        Vivamus vel est at quam commodo accumsan. Vestibulum id maximus est. Suspendisse laoreet urna mauris, eu placerat nisi tempor non. 
        Mauris dignissim dignissim massa vitae euismod. Morbi vel convallis nulla, vestibulum fringilla nisl.
        </p>
    </header>


    @include('_timeline', [
        'tweets' => $user->tweets
    ])
</x-app>