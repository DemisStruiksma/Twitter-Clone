@if (Auth::check() && current_user()->isNot($user))
<form mehtod="POST" action="{{ route('follow', $user->username) }}">
    @csrf

    <button 
    type="submit"
    class="bg-blue-500 hover:bg-blue-600 rounded-full shadow py-2 px-4 text-white text-xs focus:outline-none"
    
    >
    {{ current_user()->following($user ?? '') ? 'Unfollow' : 'Follow' }}
    </button>
</form>
@endif