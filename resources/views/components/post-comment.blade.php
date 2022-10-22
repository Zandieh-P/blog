@props(['comment'])
<article class="flex bg-gray-100 border border-gray-200 p-6 rounded-xl space-x-4">
    <div class="flex-shrink-0">
        <img width="60" height="60" src="/images/lary-avatar.svg" alt="" class="rounded-xl">
    </div>
    <div class="ml-4">
        <header class="mb-4">
            <h3 class="font-bold">{{$comment->author->username}}</h3>
            <p class="text-xs">Posted
                <time>{{$comment->created_at}}</time>
            </p>
        </header>
        <p class="mt-4">
            {{$comment->body}}
        </p>
    </div>
</article>
