<!-- ======= pages/auth/newpass ======= -->

@extends('home')

@section('konten')
    <div class="w-screen bg-slate-950">
        <main id="content" role="main" class="w-full h-screen max-w-md mx-auto p-6">
            <div class="mt-14 bg-white  rounded-xl shadow-lg dark:bg-gray-800 dark:border-gray-700 border-2 border-indigo-300">
            <div class="p-4 sm:p-7">
                <div class="text-center">
                <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Forgot Password</h1>
                <p class="mt-2 text-sm bg-slate-400 rounded-lg text-center px-10">
                    Please create a new password that you don't use an any other site
                </p>
                </div>
        
                <div class="mt-4">
                <form id="forgotpassForm" class="flex flex-col gap-4 pb-4" method="POST">
                    <div class="grid gap-y-4">
                        <div class="flex w-full rounded-lg pt-1">
                            <div class="relative w-full"><input
                                class="block w-full border disabled:cursor-not-allowed disabled:opacity-50 bg-gray-50 border-gray-300 text-gray-900 focus:border-cyan-500 focus:ring-cyan-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-cyan-500 dark:focus:ring-cyan-500 p-2.5 text-sm rounded-lg"
                                id="oldPass" type="password" name="oldPass" placeholder="Your old password"
                                required="">
                            </div>
                        </div>
                        <div class="flex w-full rounded-lg pt-1">
                            <div class="relative w-full"><input
                                class="block w-full border disabled:cursor-not-allowed disabled:opacity-50 bg-gray-50 border-gray-300 text-gray-900 focus:border-cyan-500 focus:ring-cyan-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-cyan-500 dark:focus:ring-cyan-500 p-2.5 text-sm rounded-lg"
                                id="newPass" type="password" name="newPass" placeholder="Your new password"
                                required="">
                            </div>
                        </div>
                        <div class="error-message" id="email-error"></div>
                    <a href="/login" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">Change</a>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </main>
    </div>
@endsection


