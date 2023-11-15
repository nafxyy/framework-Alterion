@extends('layouts.global')
@section('title')
    Data Produk - Admin
@endsection

@section('content')
    <div class="w-full h-full flex">
        @include('components.sidebar')
        <div class="w-full flex flex-col bg-slate-900">
            <div class="h-full m-4 p-8 bg-white rounded-lg drop-shadow-md">
                <p class="text-4xl font-bold mb-4">Data Produk</p>
                <hr><br>
                <div class="w-full h-auto flex justify-start">
                    <a href= "{{route('staff.add')}}" class="px-4 py-2 bg-green-600 rounded-md text text-white">Tambah Data</a>
                </div><br>
                <div class="w-full h-auto flex justify-start">
                    <a href= "{{ route('staff.download_excel') }}" class="px-4 py-2 bg-blue-400 rounded-md text text-white">Download Excel</a>
                </div><br>
                @if(session('successhapus'))
                        <div class="w-full relative mb-6">
                            <div class="p-2 rounded-sm bg-green-100 ring-1 ring-green-500">
                                <p class="text-green-500">
                                    {{ session('successhapus') }}
                                </p>
                            </div>
                        </div>
                @endif
                @if(session('successtambah'))
                        <div class="w-full relative mb-6">
                            <div class="p-2 rounded-sm bg-green-100 ring-1 ring-green-500">
                                <p class="text-green-500">
                                    {{ session('successtambah') }}
                                </p>
                            </div>
                        </div>
                @endif
                @if(session('successedit'))
                        <div class="w-full relative mb-6">
                            <div class="p-2 rounded-sm bg-green-100 ring-1 ring-green-500">
                                <p class="text-green-500">
                                    {{ session('successedit') }}
                                </p>
                            </div>
                        </div>
                @endif
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-black">
                        <thead class="text-xs text-white uppercase bg-slate-900">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    No.
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    ID Produk
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama Produk
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Harga Produk
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Stok Produk
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Ukuran Produk
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Deskripsi Produk
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    ID Kategori
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Gambar
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produk as $prd)
                                <tr class="bg-white border-b">
                                    <td class="px-6 py-4">
                                        {{ $prd->id }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $prd->id_produk }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $prd->nama }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $prd->harga }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $prd->stok }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $prd->ukuran }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $prd->deskripsi }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $prd->kategori_id }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $prd->nama }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="w-full h-auto">
                                            <a href = "{{ route('staff.edit', $prd->id) }}" class="p-2 bg-blue-400 rounded-md hover:bg-blue-200 text-black">Edit</a>
                                            <form action="{{route('staff.delete', $prd->id)}}" method="post">
                                                @csrf
                                                <button type="submit" class="px-6 py-2 bg-red-600 rounded-md text text-white" onclick="return confirm('Apakah anda yakin Ingin Hapus Data?')">Hapus</button>
                                            </form>
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
@endsection
