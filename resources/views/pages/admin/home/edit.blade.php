<!-- ======= pages/admin/home/edit ======= -->

@extends('pages.admin.partials.master')

@section('title', 'admin - Edit Feature Home')

@section('konten')
    
    <div class="bg-slate-950 py-20">
        <div class="container mx-auto px-4">
            <section class="bg-white dark:bg-gray-900">
                <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                    <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Edit Feature - Home</h2>
                    <form action="#">
                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                            <div class="sm:col-span-2">
                                <label for="fullname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full Name</label>
                                <input type="text" name="fullname" id="fullname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Full Name" required="">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="motto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Motto</label>
                                <input type="text" name="motto" id="motto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Motto" required="">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Message</label>
                                <input type="text" name="message" id="message" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Message" required="">
                            </div>
                            <div class="w-full">
                                <label for="link-1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link-1</label>
                                <input type="text" name="link-1" id="link-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Link-1" required="">
                            </div>
                            <div class="w-full">
                                <label for="link-2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link-2</label>
                                <input type="text" name="link-2" id="link-2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Link-2" required="">
                            </div>
                            <div class="w-full">
                                <label for="img-1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Img-1</label>
                                <input type="text" name="img-1" id="img-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Img-1" required="">
                            </div>
                            <div class="w-full">
                                <label for="img-2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Img-2</label>
                                <input type="text" name="img-2" id="img-2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Img-2" required="">
                            </div>
                            <div class="w-full">
                                <label for="nameSosmed-1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name Sosmed-1</label>
                                <input type="text" name="nameSosmed-1" id="nameSosmed-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Name Sosmed-1" required="">
                            </div>
                            <div class="w-full">
                                <label for="nameSosmed-2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name Sosmed-2</label>
                                <input type="text" name="nameSosmed-2" id="nameSosmed-2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Name Sosmed-2" required="">
                            </div>
                            <div class="w-full">
                                <label for="pendidikan-1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pendidikan-1</label>
                                <input type="text" name="pendidikan-1" id="pendidikan-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Pendidikan-1" required="">
                            </div>
                            <div class="w-full">
                                <label for="pendidikan-2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pendidikan-2</label>
                                <input type="text" name="pendidikan-2" id="pendidikan-2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Pendidikan-2" required="">
                            </div>
                            <div class="w-full">
                                <label for="mottoSosmed-1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Motto Sosmed-1</label>
                                <input type="text" name="mottoSosmed-1" id="mottoSosmed-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Motto Sosmed-1" required="">
                            </div>
                            <div class="w-full">
                                <label for="mottoSosmed-2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Motto Sosmed-2</label>
                                <input type="text" name="mottoSosmed-2" id="mottoSosmed-2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Motto Sosmed-2" required="">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="videoPersonal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link Video Personal</label>
                                <input type="text" name="videoPersonal" id="videoPersonal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Link Video" required="">
                            </div>
                        </div>
                        <button type="submit"
                            class="mt-5 border transition-colors focus:ring-2 p-0.5 disabled:cursor-not-allowed border-transparent bg-sky-600 hover:bg-sky-700 active:bg-sky-800 text-white disabled:bg-gray-300 disabled:text-gray-700 rounded-lg ">
                                <span
                                    class="flex items-center justify-center gap-1 font-medium py-1 px-2.5 text-base false">
                                    Edit Feature
                                </span>
                        </button>
                        <button type="submit"
                            class="mt-5 border transition-colors focus:ring-2 p-0.5 disabled:cursor-not-allowed border-transparent bg-sky-600 hover:bg-sky-700 active:bg-sky-800 text-white disabled:bg-gray-300 disabled:text-gray-700 rounded-lg ">   
                                <a href="/admin" class="flex items-center justify-center gap-1 font-medium py-1 px-2.5 text-base false">
                                    Back
                                </a>
                        </button>
                    </form>
                </div>
              </section>
        </div>
    </div>
@endsection