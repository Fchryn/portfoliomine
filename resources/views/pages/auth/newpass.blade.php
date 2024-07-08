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
                <form>
                    <div class="grid gap-y-4">
                    <div>
                        <div class="relative">
                        <input type="text" id="newpass" name="newpass" placeholder="Create your password" class="py-3 px-4 block w-full border-2 border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 shadow-sm" required aria-describedby="email-error">
                        </div>
                        <p class="hidden text-xs text-red-600 mt-2" id="newpass-error">Please include a valid email address so we can get back to you</p>
                    </div>
                    <div class="grid gap-y-4">
                    <div>
                        <div class="relative">
                        <input type="text" id="confirmpas" name="confirmpas" placeholder="Confirm your password" class="py-3 px-4 block w-full border-2 border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 shadow-sm" required aria-describedby="email-error">
                        </div>
                        <p class="hidden text-xs text-red-600 mt-2" id="confirmpas-error">Please include a valid email address so we can get back to you</p>
                    </div>
                    <a href="/coba_newpass" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">Change</a>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </main>
    </div>
@endsection


