{{-- NavBar --}}
<nav class="flex flex-row p-8 justify-between items-center bg-white z-10 sticky top-0">
    <a href="#" class="basis-1/4">
        <img src="{{ asset('assets/images/logoalterion.png') }}" alt="Alterion" class="w-fit h-12">
    </a>
    <ul class="flex flex-row gap-16 justify-center">
        <li ><a href="#">Home</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Address</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">About Us</a></li>
    </ul>

    <div class="basis-1/4 flex justify-end">
        <a href=" " class="bg-black px-8 py-4 w-24 rounded-lg font-bold flex justify-center pr">
            <p class="invisble text-white">Login</p>
        </a>
    </div>

</nav>
