<!-- ======= pages/auth/forgotpass ======= -->

@extends('home')

@section('konten')
    <div class="w-screen bg-slate-950">
        <main id="content" role="main" class="w-full h-screen max-w-md mx-auto p-6">
            <div class="mt-14 bg-white  rounded-xl shadow-lg dark:bg-gray-800 dark:border-gray-700 border-2 border-indigo-300">
            <div class="p-4 sm:p-7">
                <div class="text-center">
                <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Forgot Password</h1>
                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                    Enter your email address
                </p>
                </div>
        
                <div class="mt-2">
                <form id="forgotpassForm" class="flex flex-col gap-4 pb-4" method="POST">
                    @csrf
                    <div class="grid gap-y-4">
                        <div>
                            <label class="text-sm font-medium text-gray-900 dark:text-gray-300"
                                for="email">Email</label>
                        </div>
                        <div class="flex w-full rounded-lg pt-1">
                            <div class="relative w-full"><input
                                class="block w-full border disabled:cursor-not-allowed disabled:opacity-50 bg-gray-50 border-gray-300 text-gray-900 focus:border-cyan-500 focus:ring-cyan-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-cyan-500 dark:focus:ring-cyan-500 p-2.5 text-sm rounded-lg"
                                id="email" type="email" name="email" placeholder="email@example.com"
                                required="">
                            </div>
                        </div>
                        <div class="error-message" id="email-error"></div>
                        <div class="flex flex-col gap-2">
                            <button type="submit"
                                class="border transition-colors focus:ring-2 p-0.5 disabled:cursor-not-allowed border-transparent bg-sky-600 hover:bg-sky-700 active:bg-sky-800 text-white disabled:bg-gray-300 disabled:text-gray-700 rounded-lg ">
                                <span
                                    class="flex items-center justify-center gap-1 font-medium py-1 px-2.5 text-base false">
                                    Continue
                                </span>
                            </button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </main>
    </div>
@endsection


