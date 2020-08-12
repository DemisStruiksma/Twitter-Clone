<div class="border border-gray-400 rounded-lg px-8 py-6 mb-8">
    <form method="POST" action="/tweets" enctype="multipart/form-data">
        @csrf
        <!-- @method('PATCH') -->
        <textarea
        id="tweet_body" 
        name="body"
        class="w-full resize-none focus:outline-none placeholder-gray-600 focus:placeholder-gray-300"
        placeholder="What's up?"
        required
        autofocus
        maxlength="255"
        >
        </textarea>

        <div>
		    <label class="cursor-pointer text-blue-400 hover:text-blue-600">
		        <svg 
		        	class="h-5" 
		        	fill="currentColor" 
		        	viewBox="0 0 20 20"
		        >
		            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
		        </svg>
		        <input 
		        	type="file"
		        	id="image"
		        	name="image" 
		        	class="hidden"
		        />
		    </label>

		    @error('file')
		    	<p class="text-red-500 text-sm mt-1 mb-2">{{ $message }}</p>
		    @enderror
		</div>

        <span id="chars" class="text-sm font-medium">255</span> 

        <hr class="my-4">

        <footer class="flex justify-between items-center">
            <img 
                src="{{ current_user()->avatar }}" 
                alt="your avatar"
                class="rounded-full mr-2"
                width="50"
                style="max-height:50px;"
            >

            <button 
            type="submit" 
            class="bg-blue-500 hover:bg-blue-600 rounded-lg shadow px-10 text-sm text-white h-10 focus:outline-none"
            >Tweet</button>  
        </footer>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>