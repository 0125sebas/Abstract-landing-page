@extends('layouts.app')

@section('title')
    Abstract
@endsection

@section('content')
    <header>
        @include('layouts._partials.navbar')
        <div class="bg-violet-100 w-full flex flex-col items-center justify-center gap-10 h-80">
            <h1 class="text-center text-3xl xl:text-5xl font-semibold">How can we help?</h1>
            <input class="w-3/4 md:2/5 lg:2/5 2xl:w-2/5 px-2 py-2 outline-none border-solid border border-black rounded-md shadow-lg" type="search" name="#" id="#" placeholder="Search">
        </div>
    </header>
    <main>
        {{-- main content --}}
        {{-- TODO: create de main content using grid, the assets are Already downloaded --}}
        {{-- content container --}}
        <div class="flex flex-col container mx-auto gap-10 py-20 md:grid md:grid-cols-2">
            {{-- using abstract section --}}
            <div class="grid grid-cols-2 w-3/4 mx-auto">
                <div class="w-1/2">
                    <img class="w-full" src="{{ Vite::asset('public/imgs/picture-1.png') }}" alt="">
                </div>
                <div class="grid gap-2">
                    <h2 class="font-bold text-lg">Using Abstract</h2>
                    <p class="text-xl">Abstract lets you manage, version, and document your designs in one place</p>
                    <a class="text-purple-500 hover:underline hover:decoration-purple-500" href="#">Learn More</a>
                </div>
            </div>
            {{-- manage your account section --}}
            <div class="grid grid-cols-2 w-3/4 mx-auto">
                <div class="w-1/2">
                    <img class="w-full" src="{{ Vite::asset('public/imgs/picture-2.png') }}" alt="">
                </div>
                <div class="grid gap-2">
                    <h2 class="font-bold text-lg">Manage your account</h2>
                    <p class="text-xl">Configure your account settings, such as your email, profile details, and password</p>
                    <a class="text-purple-500 hover:underline hover:decoration-purple-500" href="#">Learn More</a>
                </div>
            </div>
            {{-- manage organization, teams, and projects section --}}
            <div class="grid grid-cols-2 w-4/5 mx-auto">
                <div class="w-1/2">
                    <img class="w-full" src="{{ Vite::asset('public/imgs/picture-3.png') }}" alt="">
                </div>
                <div class="grid gap-2">
                    <h2 class="font-bold text-lg">Manage organizations, teams, and projects</h2>
                    <p class="text-xl">Use Abstract organizations, teams, and projects to organize your people and your work.</p>
                    <a class="text-purple-500 hover:underline hover:decoration-purple-500" href="#">Learn More</a>
                </div>
            </div>
            {{-- manage billing section --}}
            <div class="grid grid-cols-2 w-3/4 mx-auto">
                <div class="w-1/2">
                    <img class="w-full" src="{{ Vite::asset('public/imgs/picture-4.png') }}" alt="">
                </div>
                <div class="grid gap-2">
                    <h2 class="font-bold text-lg">Manage billing</h2>
                    <p class="text-xl">Change subscriptions and payment details.</p>
                    <a class="text-purple-500 hover:underline hover:decoration-purple-500" href="#">Learn More</a>
                </div>
            </div>
            {{-- autehenticate to abstract section --}}
            <div class="grid grid-cols-2 w-3/4 mx-auto">  
                <div class="w-1/2">
                    <img class="w-full" src="{{ Vite::asset('public/imgs/picture-5.png') }}" alt="">
                </div>
                <div class="grid gap-2">
                    <h2 class="font-bold text-lg">Authenticate to Abstract</h2>
                    <p class="text-xl">Set up and configure SSO, SCIM, and Just-in-Time provisioning.</p>
                    <a class="text-purple-500 hover:underline hover:decoration-purple-500" href="#">Learn More</a>
                </div>
            </div>
            {{-- abstract support section --}}
            <div class="grid grid-cols-2 w-3/4 mx-auto">
                <div class="w-1/2">
                    <img class="w-full" src="{{ Vite::asset('public/imgs/picture-6.png')}}" alt="">
                </div>
                <div class="grid gap-2">
                    <h2 class="font-bold text-lg">Abstract support</h2>
                    <p class="text-xl">Get in touch with a human.</p>
                    <a class="text-purple-500 hover:underline hover:decoration-purple-500" href="#">Learn More</a>
                </div>
            </div>
        </div>
    </main>
    @include('layouts._partials.footer')
    
@endsection