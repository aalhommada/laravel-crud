@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Blog Posts
        </h1>
    </div>
</div>
<div class="w-2/5 h-9  m-auto  ">

    <form class="flex rounded-lg shadow-lg" action="{{ route('search') }}" method="GET">
        <input class="flex-1 rounded-lg" type="text" name="search" required />
        <button class=" bg-blue-500 text-gray-100 p-3 flex-2 rounded-lg" type="submit">Search</button>
    </form>
</div>


@if (session()->has('message'))
<div class="w-4/5 m-auto mt-10 pl-2">
    <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4 px-6">
        {{ session()->get('message') }}
    </p>
</div>
@endif

@if (Auth::check())
<div class="pt-15 w-4/5 m-auto">
    <a href="/blog/create" class="bg-blue-900 uppercase bg-transparent text-gray-100 text-xl font-bold py-3 px-5 rounded-3xl">
        Create post
    </a>
</div>
@endif

@foreach ($posts as $post)
<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="{{ asset('images/' . $post->image_path) }}" alt="">
    </div>
    <div>
        <h2 class="text-gray-700 font-bold text-5xl pb-4">
            {{ $post->title }}
        </h2>

        <span class="text-gray-500">
            By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
        </span>

        <p class="text-2xl text-gray-700 pt-8 pb-10 leading-8 font-light">
            {{substr($post->description, 0, 250)}} <span class="text-3xl">...</span>
        </p>

        <div class="mt-5 mb-10 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
            <div class="rounded-md shadow">
                <a href="/blog/{{ $post->slug }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                    Read More
                </a>
            </div>

        </div>

        @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
        <span class="float-right">
            <a href="/blog/{{ $post->slug }}/edit" class="text-gray-700 italic hover:text-gray-900 hover:bg-green-500 hover:px-4 hover:text-gray-100 pb-1 border-b-2">
                Edit
            </a>
        </span>

        <span class="float-right">
            <form action="/blog/{{ $post->slug }}" method="POST" id="delete-form">
                @csrf
                @method('delete')

                <button class="text-red-500 pr-3" type="submit" onclick="if (confirm('Are you sure to delete this data?')) {
                    event.preventDefault();
                    document.getElementById('delete-form').submit();

                    }else{
                        event.preventDefault();
                    }
                ">
                    Delete
                </button>

            </form>
        </span>
        @endif
    </div>
</div>
@endforeach

@endsection