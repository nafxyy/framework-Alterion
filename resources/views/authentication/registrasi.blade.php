@extends('layouts.global')

@section('title')
    Registrasi Akun - Alterion | Favorite Thrift Shop
@endsection

@section('content')
<div class="flex">
    <img src="{{ asset('assets/images/hero2.jpg') }}" alt="" class="w-4/5 h-screen object-cover brightness-50">
    <div class="w-screen h-screen bg-gradient-to-tr bg-slate-900 flex justify-center items-center">
        <div class="absolute w-2/5 h-auto right-24 bg-white rounded-xl flex flex-col overflow-hidden divide-y-2">
            <div class="flex justify-around">
                <h1 class="w-full pt-8 pb-6 font-bold text-3xl text-center">Buat Akun</h1>
            </div>
            <div class="h-full px-12 py-8 flex flex-col justify-between items-center">
                <form action="{{ route('register.action') }}" method="post" class="w-full flex flex-col items-start">
                    @csrf
                    @if(session('error'))
                        <div class="w-full relative mb-6">
                            <div class="p-2 rounded-sm bg-red-100 ring-1 ring-red-500">
                                <p class="text-red-500">
                                    {{ session('error') }}
                                </p>
                            </div>
                        </div>
                    @endif
                    @if(session('success'))
                        <div class="w-full relative mb-6">
                            <div class="p-2 rounded-sm bg-green-100 ring-1 ring-green-500">
                                <p class="text-green-500">
                                    {{ session('success') }}
                                </p>
                            </div>
                        </div>
                    @endif
                    <div class="w-full relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-2.625 6c-.54 0-.828.419-.936.634a1.96 1.96 0 00-.189.866c0 .298.059.605.189.866.108.215.395.634.936.634.54 0 .828-.419.936-.634.13-.26.189-.568.189-.866 0-.298-.059-.605-.189-.866-.108-.215-.395-.634-.936-.634zm4.314.634c.108-.215.395-.634.936-.634.54 0 .828.419.936.634.13.26.189.568.189.866 0 .298-.059.605-.189.866-.108.215-.395.634-.936.634-.54 0-.828-.419-.936-.634a1.96 1.96 0 01-.189-.866c0-.298.059-.605.189-.866zm2.023 6.828a.75.75 0 10-1.06-1.06 3.75 3.75 0 01-5.304 0 .75.75 0 00-1.06 1.06 5.25 5.25 0 007.424 0z" clip-rule="evenodd" />
                              </svg>
                        </div>
                        <input type="text" name="name" placeholder="Masukkan Nama..." class="w-full ps-12 pe-4 py-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-slate-900">
                    </div>
                    <div class="w-full relative mt-6">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input type="text" name="username" placeholder="Masukkan Username..." class="w-full ps-12 pe-4 py-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-slate-900">
                    </div>
                    <div class="w-full relative mt-6">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M12 1.5a5.25 5.25 0 00-5.25 5.25v3a3 3 0 00-3 3v6.75a3 3 0 003 3h10.5a3 3 0 003-3v-6.75a3 3 0 00-3-3v-3c0-2.9-2.35-5.25-5.25-5.25zm3.75 8.25v-3a3.75 3.75 0 10-7.5 0v3h7.5z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input type="password" name="password" placeholder="Masukkan Password..." class="w-full ps-12 pe-4 py-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-slate-900">
                    </div>
                    <div class="w-full relative mt-6">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M4.755 10.059a7.5 7.5 0 0112.548-3.364l1.903 1.903h-3.183a.75.75 0 100 1.5h4.992a.75.75 0 00.75-.75V4.356a.75.75 0 00-1.5 0v3.18l-1.9-1.9A9 9 0 003.306 9.67a.75.75 0 101.45.388zm15.408 3.352a.75.75 0 00-.919.53 7.5 7.5 0 01-12.548 3.364l-1.902-1.903h3.183a.75.75 0 000-1.5H2.984a.75.75 0 00-.75.75v4.992a.75.75 0 001.5 0v-3.18l1.9 1.9a9 9 0 0015.059-4.035.75.75 0 00-.53-.918z" clip-rule="evenodd" />
                              </svg>
                        </div>
                        <input type="password" name="confirm_password" placeholder="Konfirmasi Password..." class="w-full ps-12 pe-4 py-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-slate-900">
                    </div>
                    <div class="w-full flex justify-between mt-4">
                        <a href="{{ route('login') }}" class=" text-sm text-end text-slate-900 hover:font-medium">Sudah Punya Akun</a>
                    </div>
                    <button type="submit" class="w-full h-auto py-4 mt-16 text-white font-medium bg-slate-900 rounded-md flex justify-center items-center hover:bg-slate-700">Buat Akun</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
