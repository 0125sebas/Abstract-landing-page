@extends('layouts.app')

@section('title')
    Abstract | Login
@endsection

@section('content')

<div class="flex flex-col items-center justify-center mx-auto text-center gap-5 mt-10 py-10 w-3/4 sm:border sm:rounded sm:shadow-lg sm:px-10 sm:w-1/2 lg:w-1/3 2xl:w-1/4">
    <div>
        <h1 class="text-lg">Sign in to Abstract</h1>
        <h4 class="text-sm text-blue-900"><a class="hover:underline hover:decoration-blue-900" href="#">Switch to agent sign-in</a></h4>
    </div>
    <div class="flex justify-evenly items-center w-full border shadow-md py-1 hover:bg-gray-100 rounded">
        <img class="w-8" src="{{ Vite::asset('public/imgs/google-brand.svg') }}" alt="">
        <a class="text-sm font-semibold w-full" href="#">Sign in with Google</a>
    </div>
    <hr class="w-full">
    <div class="w-full">
        <form class="flex flex-col text-start text-sm gap-3" action="" method="post">
            <label for="email">
                Email
            </label>
                <input class="border w-full py-2 px-2 outline-2 rounded" type="email" name="" id="email">
            <label>
                Password
            </label for="password">
                <input class="border w-full py-2 px-2 outline-2 rounded" type="password" name="" id="password">
            <a class="text-blue-900 hover:underline hover:decoration-blue-900" href="#">Forgot password?</a>
            <input class="bg-blue-700 hover:bg-blue-900 text-white font-bold py-2 rounded cursor-pointer" type="submit" value="Sign in">
        </form>
    </div>
    <div class="text-sm">
        Emailed us for support? <a class="text-blue-900 hover:underline hover:decoration-blue-900" href="#">Get a password</a><br>
        new to Abstract? <a class="text-blue-900 hover:underline hover:decoration-blue-900" href="#">Sign up</a>
    </div>
</div>

@endsection
