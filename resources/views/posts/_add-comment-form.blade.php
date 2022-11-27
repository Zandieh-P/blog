@auth
    <x-panel>
        <form action="/posts/{{$post->slug}}/comments" method="post">
            @csrf
            <header class="flex items-center">
                <img width="40"
                     height="40"
                     src="/images/lary-avatar.svg"
                     alt=""
                     class="rounded-full">
                <h2 class="ml-4">Want to participate?</h2>
            </header>
            <div class="mt-8">
                <textarea
                    name="body"
                    class="w-full text-sm focus-outline-none focus:ring"
                    rows="5"
                    placeholder="Quick, think of somthing to say!"
                    required></textarea>
                @error("body")
                <span class="text-xs text-red-500">{{$message}}</span>
                @enderror
            </div>
            <div class="flex justify-end mt-8 pt-8 border-t border-gray-200">
                <x-form.button>Post</x-form.button>
            </div>
        </form>
    </x-panel>
@else
    <p class="font-semibold">
        <a href="/register" class="text-blue-500">Register</a> or
        <a href="/login" class="text-blue-500">Log in</a> to leave a comment.
    </p>
@endauth
