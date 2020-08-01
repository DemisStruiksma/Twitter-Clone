<div class="border border-gray-400 rounded-lg px-8 py-6 mb-8">
    <form method="POST" action="/tweets" enctype="multipart/form-data">
        @csrf

        <textarea 
        name="body"
        class="w-full resize-none focus:outline-none placeholder-gray-600 focus:placeholder-gray-300"
        placeholder="What's up?"
        required
        autofocus
        ></textarea>

        <hr class="my-4">

        <footer class="flex justify-between items-center">
            <img 
                src="{{ current_user()->avatar }}" 
                alt="your avatar"
                class="rounded-full mr-2"
                width="50"
                style="max-height:50px;"
            >

            <input class="border border-gray-400 p-2 focus:outline-none placeholder-gray-600 focus:placeholder-gray-300"
                       type="file"
                       name="image"
                       id="image"
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