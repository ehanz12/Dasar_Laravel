<x-layout>
<x-slot:title>{{ $title }}</x-slot:title>

<article class=" my-12 py-8 max-w-screen-md border-b-2">
    
    <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">
        {{ $post['title'] }}</h2>
    <div>
    By
        <a href="/author/{{$post->author->username}}" class="hover:underline">{{$post->author->name}}</a> 
        In
        <a href="/categories{{ $post->category->slug }}" class="hover:underline">{{ $post->category->name }}</a> 
        |  {{ $post->created_at->diffForHumans() }}
    </div>
    <p class="my-5 font-light">
        {{ $post['body']}}
    </p>
    <a href="/posts" class="font-medium text-blue-500 hover:underline"> &laquo; Back To More </a>
</article>

</x-layout>