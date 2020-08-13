@can('update', $tweet)
<div>
    <form 
        action="/tweets/{{ $tweet->id }}/remove" 
        method="POST">
        @csrf
        @method('DELETE')
    >
        <button 
            class="text-sm bg-gray-600" 
            type="submit"
        >
            Delete
        </button>
    </form>
</div>
@endcan