{{-- NavBar --}}
<nav class="flex flex-row p-8 justify-between items-center bg-white z-10 sticky top-0">
    <a href="#" class="basis-1/4">
        <img src="{{ asset('assets/images/logoalterion.png') }}" alt="Alterion" class="w-fit h-12">
    </a>
    <ul class="flex flex-row gap-16 justify-center mr-[200px]">
        <li ><a class="hover:bg-slate-100 rounded-md" href="#">Home</a></li>
        <li><a class="hover:bg-slate-100 rounded-md" href="#">Products</a></li>
        <li><a class="hover:bg-slate-100 rounded-md" href="#">Address</a></li>
        <li><a class="hover:bg-slate-100 rounded-md" href="#">Contact</a></li>
        <li><a class="hover:bg-slate-100 rounded-md" href="#">About Us</a></li>
    </ul>

    <div class="flex items-center">
        @auth
            <p class="mr-6 text-xl">Hello, {{ auth()->user()->username }}!</p>
            <form action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="bg-red-500 px-4 py-2 text-white rounded-lg">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}" class="bg-black px-8 py-4 w-24 rounded-lg font-bold flex justify-center">
                <p class="text-white">Login</p>
            </a>
        @endauth
    </div>

</nav>
