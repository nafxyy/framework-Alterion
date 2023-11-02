@extends('layouts.global')

@section('title')
    Login - Alterion | Favorite Thrift Shop
@endsection

@section('content')
    <div class="flex bg-slate-900">
        <div class="w-3/5 h-screen flex flex-col justify-center">
            <h2 class="text-white text-3xl font-bold text-center mb-4">Welcome Back User</h2>
            <div class="w-4/6 h-3/5 bg-white rounded-xl flex flex-col mx-auto">
                <div class="h-full px-12 py-8 pt-24 flex flex-col justify-between items-center">
                    <form action="{{ route('login.action') }}" method="post" class="w-full flex flex-col items-start">
                        @csrf
                        @if (session('error'))
                            <div class="w-full relative mb-6">
                                <div class="p-2 rounded-sm bg-red-100 ring-1 ring-red-500">
                                    <p class="text-red-500">{{ session('error') }}</p>
                                </div>
                            </div>
                        @endif
                        <div class="w-full relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="username" name="username" placeholder="Username"
                                   class="w-full ps-12 pe-4 py-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-slate-900">
                        </div>
                        <div class="w-full relative mt-6">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M12 1.5a5.25 5.25 0 00-5.25 5.25v3a3 3 0 00-3 3v6.75a3 3 0 003 3h10.5a3 3 0 003-3v-6.75a3 3 0 00-3-3v-3c0-2.9-2.35-5.25-5.25-5.25zm3.75 8.25v-3a3.75 3.75 0 10-7.5 0v3h7.5z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="password" name="password" placeholder="Password"
                                   class="w-full ps-12 pe-4 py-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-slate-900">
                        </div>
                        <a href="{{ route('register') }}" class="text-sm text-end text-slate-900 hover:font-medium mt-4">Buat Akun Baru</a>
                        <div class="w-full flex justify-between mt-4">
                            <button type="submit" class="w-full h-auto py-4 mt-10 mr-12 ml-8 text-white font-medium bg-slate-900 rounded-md flex justify-center items-center hover:bg-slate-700">Sign In</button>
                        
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/images/hero2.jpg') }}" alt="Alterion Thrift Shop" class="w-2/5 h-screen object-cover brightness-50">
    </div>
@endsection
