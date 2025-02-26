@extends('layouts.template')

@section('content')
    <section id="loginUser" class="bg-cover bg-center">
        <div class="flex flex-col items-center justify-center min-h-screen px-6 mx-auto lg:py-0">
            <h2
                class="mb-4 text-4xl font-extrabold leading-none tracking-tight flex items-center mb-6 text-2xl font-semibold text-white">
                <img class="w-8 h-8 mr-2"
                    src="https://upload.wikimedia.org/wikipedia/commons/a/ac/Eo_circle_orange_letter-v.svg" alt="logo">
                VotePad2
            </h2>
            <div
                class="w-full rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h2 class="text-2xl font-bold leading-tight tracking-tight text-white">
                        Vote Login
                    </h2>
                    @if (session('unsuccess'))
                        <div id="alert-2"
                            class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                            role="alert">
                            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="sr-only">Info</span>
                            <div class="ms-3 text-sm font-medium">
                                {{ session('unsuccess') }}
                            </div>
                            <button type="button"
                                class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                                data-dismiss-target="#alert-2" aria-label="Close">
                                <span class="sr-only">Close</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                            </button>
                        </div>
                    @endif
                    <form class=" mx-auto" action="{{ route('jury-authenticate') }}" autocomplete="off" method="post">
                        @csrf
                        <div class="mb-5">
                            <label for="coupon"
                                class="block mb-2 text-sm font-medium text-white dark:text-white">Coupon</label>
                            <input type="coupon" id="coupon" name="coupon"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500"
                                required />
                        </div>
                        <button type="submit"
                            class="text-black bg-white hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-500 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                            Login
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
