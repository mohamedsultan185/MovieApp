@extends('layouts.main')
@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="/img/parasite.jpg" alt="parasite" class="w-64 lg:w-96">
            <div class="md:ml-24">
                <h2 class="text-4xl mt-4 md:mt-0 font-semibold">Parasite(2019)</h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm">
                    <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                        <g data-name="Layer 2">
                            <path
                                d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                data-name="star" />
                        </g>
                    </svg>
                    <span class="ml-1">85%</span>
                    <span class="mx-2">|</span>
                    <span>Feb 20,2020</span>
                    <span class="mx-2">|</span>
                    <span>Action ,Thirller ,Drama</span>
                </div>
                <p class="text-gray-300 mt-8">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic natus at enim, voluptatibus, amet et magnam dicta recusandae nemo itaque veniam! Voluptatibus iste adipisci dolorum eius? Aliquid, voluptas architecto aperiam vel doloribus atque. Autem, ullam? Odit dolore quasi delectus adipisci distinctio maxime id aliquam doloremque. Accusantium aut hic nulla enim.
                </p>
                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Crew</h4>
                    <div class="flex mt-4">
                        <div>
                            <div>Bone Joon-ho</div>
                            <div class="text-sm text-gray-400">Screenplay</div>
                        </div>

                        <div class="ml-8">
                            <div>Han Jin-won</div>
                            <div class="text-sm text-gray-400">Screenplay</div>
                        </div>
                    </div>
            </div>

        </div>
    </div>
@endsection
