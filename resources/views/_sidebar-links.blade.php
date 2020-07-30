 <ul>
    <li><a
            class="font-bold text-lg mb-4 block hover:opacity-75" 
            href="{{ route('home') }}"
        >Home</a></li>
    <li><a
            class="font-bold text-lg mb-4 block hover:opacity-75" 
            href="/explore"
        >Explore</a></li>
    <!-- <li><a
            class="font-bold text-lg mb-4 block hover:opacity-75" 
            href="/"
        >Notifications</a></li> -->
    <!-- <li><a
            class="font-bold text-lg mb-4 block hover:opacity-75" 
            href="/"
        >Messages</a></li> -->
    <!-- <li><a
            class="font-bold text-lg mb-4 block hover:opacity-75" 
            href="/"
        >Bookmarks</a></li> -->
    <!-- <li><a
            class="font-bold text-lg mb-4 block hover:opacity-75" 
            href="/"
        >Lists</a></li> -->
    <li><a
            class="font-bold text-lg mb-4 block hover:opacity-75" 
            href="{{ route('profile', current_user()) }}"
        >Profile</a></li>
    <li>
        <form method="POST" action="/logout">
            @csrf 

            <button class="font-bold text-lg hover:opacity-75">Logout</button>
        </form> 
    </li>
 </ul>