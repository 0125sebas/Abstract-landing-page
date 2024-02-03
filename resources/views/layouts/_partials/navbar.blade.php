<nav id="navbar" class="bg-black flex justify-around sm:justify-between sm:items-center w-full py-5">
    <div class="sm:w-1/2 sm:flex sm:justify-center sm:items-center">
        <img class="w-36 cursor-pointer" src="{{ Vite::asset('public/imgs/brand.svg') }}" alt="Brand">
    </div>
    <div class="hidden sm:w-1/2  sm:flex sm:justify-center sm:items-center sm:gap-5">
        <li><a class=" text-white font-sans text-xl border py-2 px-4 rounded-lg bg-slate-900" href="{{ route('contact-support') }}">Submit a request</a></li>
        <li><a class="text-white font-sans text-xl border py-2 px-4 rounded-lg bg-blue-700 hover:bg-white hover:text-black" href="{{ route('login')}}">Sign in</a></li>
    </div>
    <div id="menu-buttons-container" class="sm:hidden flex justify-end items-center gap-4">
        <img id="menu-open" class="cursor-pointer" src="{{ Vite::asset('public/imgs/menu.svg')}}" alt="menu">
        <img id="menu-close" class="hidden cursor-pointer" src="{{ Vite::asset('public/imgs/close-menu.svg')}}" alt="close">
    </div>
</nav>
@include('layouts._partials.downNavbar')