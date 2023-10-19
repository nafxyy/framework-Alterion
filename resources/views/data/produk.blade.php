@extends('layouts.global')
@section('title')
    Data Mahasiswa - Staff
@endsection


<section class="py-16 bg-white ">
    <h1 class="text-4xl font-bold text-center mb-8">Products Variant</h1>
    {{-- container 1 --}}
    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 mb-12">
    @foreach ($produk as $prd)
        <div class="bg-gray-100 p-4 rounded-lg shadow-lg text-center">
            <img src="{{ asset('assets/images/flannel.jpg') }}" alt="Baju Flannel" class="w-full h-auto">
            <h1 class="text-xl font-semibold mt-4">{{$prd -> nama}}</h1>
            <p class="show4 mt-2">{{$prd->kategori->nama}}</p>
        </div>
        @endforeach
    </div>
</section>

