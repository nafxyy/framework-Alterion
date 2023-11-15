{{-- @extends('layouts.global')
@section('title')
    Data Akun - Admin
@endsection

@section('content')
    <div class="w-full h-full flex">
        @include('components.sidebar')
        <div class="w-full flex flex-col bg-slate-100">
            <div class="h-full m-4 p-8 bg-white rounded-lg drop-shadow-md">
                <p class="text-4xl font-bold mb-4">Data Akun</p>
                <hr><br>
                <div class="w-full h-auto flex justify-end">
                    <button class="px-4 py-2 bg-green-600 rounded-md text text-white">Tambah</button>
                </div><br>
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    No.
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Username
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Password
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $usr)
                                <tr class="bg-white border-b">
                                    {{-- ['id_produk', 'nama', 'harga', 'stok', 'ukuran', 'deskripsi', 'kategori_id']; --}}
                                    {{-- <td class="px-6 py-4">
                                        {{ $usr->id }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $usr->id_akun }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $usr->username }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $usr->password }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="w-full h-auto">
                                            <button class="px-4 py-2 bg-yellow-300 rounded-md text">Edit</button>
                                            <button class="px-4 py-2 bg-red-600 rounded-md text text-white">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection --}}

@extends('layouts.global')
@section('title')
Daftar Akun - Staff
@endsection

@section('content')
<div class="w-full h-full flex">
    @include('components.sidebar')
    <div class="w-full h-screen flex gap-4 flex-col bg-slate-900">
        <div class="h-full mx-4 p-8 bg-white rounded-lg drop-shadow-md">
            <p class="text-7xl font-bold pl-64 pt-72">Coming Soon Juga</p>
        </div>
    </div>
</div>
@endsection
