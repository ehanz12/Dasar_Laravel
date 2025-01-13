<x-layout>
<x-slot:title>{{ $title }}</x-slot:title>

@foreach ( $posts as $post )

<article class=" my-12 py-8 max-w-screen-md border-b-2 border-gray-600">
    <a href="/posts/{{ $post['id'] }}" class="hover:underline">
    <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
    </a>
    <div class="text-base text-gray-500 my-20 ">
        By
        <a href="/author/{{$post->author->username}}" class="hover:underline">{{$post->author->name}}</a> 
        In
        <a href="/categories{{ $post->category->slug }}" class="hover:underline">{{ $post->category->name }}</a> 
        |  {{ $post->created_at->diffForHumans() }}
    </div>
    <p class="my-5 font-light">
        {{ Str::limit($post['body'], 100) }}
    </p>
    <a href="/posts/{{ $post['id'] }}" class="font-medium text-blue-500 hover:underline"> Read More  &raquo;</a>
    <hr class="border-b-2 my-1.5">
</article>
@endforeach



</x-layout>