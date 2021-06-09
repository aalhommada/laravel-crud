@extends('layouts.app')
@section('content')


@if($posts->isNotEmpty())
<div class="w-4/5  grid grid-1 m-auto text-center shadow-md ">
    @foreach ($posts as $post)

    <ul class="my-6">
        <li class="">
            <a href="/blog/{{ $post->slug }}" class="uppercase  text-gray-900 text-lg font-extrabold py-4 px-8 rounded-3xl">
                <div class="w-4/5 flex flex-row border-b-2 border-gray-900 m-auto text-center">
                    <img class="inline w-1/4 pr-4 shadow  align-left border-none" src="{{ asset('images/' . $post->image_path) }}" alt="">
                    <p class="ml-3">{{ $post->title }}</p>
                </div>
            </a>
        </li>
    </ul>

    <div class="">
        @endforeach
        @else

        <h2 class="text-6xl leading-loose text-center text-red-500">No posts found</h2>
    </div>
    @endif
</div>

@endsection