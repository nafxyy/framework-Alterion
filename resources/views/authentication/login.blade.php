@extends('layouts.global')

@section('title')
    Login - Alterion | Favorite Thrift Shop
@endsection

@section('content')
    <div class="flex">
        <img src="{{ asset('assets/images/hero.jpg') }}" alt="Alterion Thrift Shop"
            class="w-screen h-screen object-cover brightness-50">
        {{-- <div class="Section Section--small mx-auto mt-10">
            <h1 class="display-24-caps text-center mb-2">Login</h1>
            <p class="body-14 text-center">Login to your Thrift+ account to see your orders, manage your items, and spend
                your credits.</p>
            <form class="bg-brandGrey50 px-5 py-4 mt-8">
                <div class="flex flex-col gap-2 mb-4"><label class="body-14-bold" for="email">Email</label><input
                        type="email" id="email" placeholder="example@example.com" required=""></div>
                <div>
                    <div class="flex flex-col gap-2"><label class="body-14-bold" for="password">Password</label>
                        <div class="flex flex-col gap-0"><input id="password" type="text" required=""
                                autocomplete="off" value=""></div>
                        <div class="flex flex-row items-center justify-between mb-4 mt-0"><a
                                class="body-14-underline text-digitalBlue" href="/forgot-password">Forgot Password?</a>
                        </div>
                    </div>
                </div><button class="styles_button__EJk3i styles_brandButton__xTIEk w-full">
                    <div class="body-12-bold">login</div>
                </button>
                <div class="w-full flex justify-center mt-7 mb-7"><a class="styles_container__4SpOY"
                        href="/account/create-account">
                        <h5 class="styles_text__wQhAO body-16-bold">Create an Account</h5><span
                            class="styles_icon__iSKR7"><svg width="22" height="14" viewBox="0 0 22 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <line x1="0.946045" y1="7" x2="19.9999" y2="7" stroke="black"
                                    stroke-width="2"></line>
                                <path d="M14.9858 1.5L20 7L14.9858 12.5" stroke="black" stroke-width="2"></path>
                            </svg><span class="sr-only">arrowRight</span></span>
                    </a></div>
            </form>
        </div> --}}
        <div class="w-2/5 h-screen bg-gradient-to-tr from-blue-800 to-blue-950 flex justify-center items-center">
            <div class="absolute w-2/5 h-auto right-24 bg-white rounded-xl flex flex-col overflow-hidden divide-y-2">
                <div class="flex justify-around">
                    <h1 class="w-full pt-8 pb-6 font-bold text-3xl text-center">Login</h1>
                </div>
                <div class="h-full px-12 py-8 flex flex-col justify-between items-center">
                    <form action="#" class="w-full flex flex-col items-start">
                        <div class="w-full relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                                <svg class="h-6 fill-slate-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                                    <path
                                        d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-240v-32q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v32q0 33-23.5 56.5T720-160H240q-33 0-56.5-23.5T160-240Zm80 0h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z" />
                                </svg>
                            </div>
                            <input type="username" name="username" placeholder="Username"
                                class="w-full ps-12 pe-4 py-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-blue-500">
                        </div>
                        <div class="w-full relative mt-6">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                                <svg class="h-6 fill-slate-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                                    <path
                                        d="M240-80q-33 0-56.5-23.5T160-160v-400q0-33 23.5-56.5T240-640h40v-80q0-83 58.5-141.5T480-920q83 0 141.5 58.5T680-720v80h40q33 0 56.5 23.5T800-560v400q0 33-23.5 56.5T720-80H240Zm0-80h480v-400H240v400Zm240-120q33 0 56.5-23.5T560-360q0-33-23.5-56.5T480-440q-33 0-56.5 23.5T400-360q0 33 23.5 56.5T480-280ZM360-640h240v-80q0-50-35-85t-85-35q-50 0-85 35t-35 85v80ZM240-160v-400 400Z" />
                                </svg>
                            </div>
                            <input type="password" name="password" placeholder="Password"
                                class="w-full ps-12 pe-4 py-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-blue-500">
                        </div>
                    </form>
                    <a href="{{ route('data.produk') }}"
                        class="w-full h-auto py-4 mt-16 text-white font-medium bg-blue-800 rounded-md flex justify-center items-center hover:bg-blue-700">
                        <button type="submit" class="">Masuk</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
