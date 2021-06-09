@extends('layouts.app')

@section('content')


<div class="relative bg-white overflow-hidden h-screen">
    <div class="max-w-7xl mx-auto">
        <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
            <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                <polygon points="50,0 100,0 50,100 0,100" />
            </svg>

            <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                <div class="sm:text-center lg:text-left">
                    <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                        <span class="block xl:inline">Abdullah Al Hommada</span><br><br>
                        <span class="block text-indigo-500 xl:inline"><span class="text-red-700 uppercase">f</span>ullstach <span class="text-red-700">w</span>eb <span class="text-red-700">d</span>eveloper</span>
                    </h1>
                    <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                        Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.
                    </p>
                    <div class="mt-5 mb-10 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                        <div class="rounded-md shadow">
                            <a href="{{url('/blog')}}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                                Read More
                            </a>
                        </div>

                    </div>
                </div>
            </main>
        </div>
    </div>
    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
        <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://cdn.pixabay.com/photo/2015/07/17/22/43/student-849825_960_720.jpg" alt="">
    </div>
</div>

<div class="w-full bg-yellow-100 sm:grid grid-cols-2 gap-20 w-4/5 mx-auto  py-15 px-15 border-b border-gray-200 ">
    <div>
        <img src="https://cdn.pixabay.com/photo/2016/10/09/08/32/digital-marketing-1725340_960_720.jpg" width="700" alt="">
    </div>

    <div class="m-auto sm:m-auto text-left w-4/5 block">
        <h2 class="text-3xl font-extrabold text-gray-900">
            Do not stop learning!
        </h2>

        <p class="py-8 text-blue-400 text-s">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus.
        </p>

        <p class="font-extrabold text-blue-400 text-s pb-9">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente magnam vero nostrum! Perferendis eos molestias porro vero. Vel alias.
        </p>
        <div class="mt-5 mb-10 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
            <div class="rounded-md shadow">
                <a href="{{url('/blog')}}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                    Read More
                </a>
            </div>

        </div>
        <!-- <a href="/blog" class="uppercase bg-green-800 hover:bg-yellow-900 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
            Find Out More
        </a> -->
    </div>
</div>

<div class="text-center py-15 bg-grat-0">
    <h2 class="text-4xl font-bold py-10">
        Abdout me
    </h2>

    <p class="m-auto w-4/5 text-gray-500">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque exercitationem saepe enim veritatis, eos temporibus quaerat facere consectetur qui.
    </p>
</div>

<div class="sm:grid grid-cols-2 w-4/5 m-auto shadow-lg">
    <div class="flex bg-yellow-100 text-gray-900 ">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
            <span class="uppercase text-l font-extrabold text-red-500">
                Full stack web developer
            </span>

            <h3 class="text-xl font-bold py-10">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas necessitatibus dolorum error culpa laboriosam.
            </h3>

            <div class="mt-5 mb-10 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                <div class="rounded-md shadow">
                    <a href="https://github.com/aalhommada" target="_blanck" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                        Find out More
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div>
        <img src="https://cdn.pixabay.com/photo/2017/10/10/21/47/laptop-2838921_960_720.jpg" alt="">
    </div>
</div>

@endsection