<x-layout>
<x-slot:title>{{ $title }}</x-slot:title>

  <div class="max-w-7xl mx-5 py-2">
    <div class="mx-auto max-w-2xl lg:mx-0">
      <h2 class="text-pretty text-6xl font-semibold tracking-tight text-gray-900 sm:text-5xl lg:text-5xl ">From the blog</h2>
      <p class="mt-2 text-lg/8 text-gray-600 ">Learn how to grow your business with our expert advice.</p>
    </div>
    <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none ">
@foreach ( $posts as $post )
<!-- <article class=" my-12 py-8 max-w-screen-md border-b-2 border-gray-600">
    <a href="/posts/{{ $post['id'] }}" class="hover:underline">
    <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
    </a>
    <div class="text-base text-gray-500 my-20 ">
        By
        <a href="/author/{{$post->author->username}}" class="hover:underline">{{$post->author->name}}</a> 
        In
        <a href="/categories/{{ $post->category->slug }}" class="hover:underline">{{ $post->category->name }}</a> 
        |  {{ $post->created_at->diffForHumans() }}
    </div>
    <p class="my-5 font-light">
        {{ Str::limit($post['body'], 100) }}
    </p>
    <a href="/posts/{{ $post['id'] }}" class="font-medium text-blue-500 hover:underline"> Read More  &raquo;</a>
    <hr class="border-b-2 my-1.5">
</article> -->
      <article class="flex max-w-xl flex-col items-start justify-between ">
        <div class="flex items-center gap-x-4 text-xs">
          <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
          <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
        </div>
        <div class="group relative">
          <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
            <a href="#">
              <span class="absolute inset-0"></span>
              Boost your conversion rate
            </a>
          </h3>
          <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
        </div>
        <div class="relative mt-8 flex items-center gap-x-4">
          <div class="text-sm/6">
            <p class="font-semibold text-gray-900">
              <a href="#">
                <span class="absolute inset-0 h-10 text-3xl"></span>
                Michael Foster
              </a>
            </p>
            <p class="text-gray-600">Co-Founder / CTO</p>
          </div>
        </div>
      </article>
@endforeach
      </div>
  </div>



</x-layout>