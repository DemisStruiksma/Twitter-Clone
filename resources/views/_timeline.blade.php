<div class="border border-gray-300 rounded-lg mb-8">
    @forelse ($tweets as $tweet)
        @include('_tweet')
        
    @empty
        <p class="p-4">No tweets yet.</p>
    @endforelse

    {{ $tweets->links() }}
</div>

<footer class="flex items-center fixed bottom-0 right-0 m-6">
        @include('flash::message')
</footer>