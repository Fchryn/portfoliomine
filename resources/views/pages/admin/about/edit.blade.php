<!-- ======= pages/admin/about/edit ======= -->

@extends('pages.admin.partials.master')

@section('title', 'admin - Edit Feature About Me')

@section('konten')
    
    <div class="bg-slate-950 py-20">
        <div class="container mx-auto px-4">
            <section class="bg-white dark:bg-gray-900">
                <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                    <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Edit Feature - About Me</h2>
                    <form action="#">
                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                            <div class="w-full">
                                <label for="titleProject-1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title Project-1</label>
                                <input type="text" name="titleProject-1" id="titleProject-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Title Project-1" required="">
                            </div>
                            <div class="w-full">
                                <label for="img-1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Img-1</label>
                                <input type="text" name="img-1" id="img-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Img-1" required="">
                            </div>
                            <div class="w-full">
                                <label for="detailProject-1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Detail Project-1</label>
                                <input type="text" name="detailProject-1" id="detailProject-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Detail Project-1" required="">
                            </div>
                            <div class="w-full">
                                <label for="projectName-1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Project Name-1</label>
                                <input type="text" name="projectName-1" id="projectName-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Project Name-1" required="">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="projectExplain-1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Project Explain-1</label>
                                <input type="text" name="projectExplain-1" id="projectExplain-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Project Explain-1" required="">
                            </div>
                            <div class="w-full">
                                <label for="titleProject-2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title Project-2</label>
                                <input type="text" name="titleProject-2" id="titleProject-2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Title Project-2" required="">
                            </div>
                            <div class="w-full">
                                <label for="img-2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Img-2</label>
                                <input type="text" name="img-2" id="img-2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Img-2" required="">
                            </div>
                            <div class="w-full">
                                <label for="detailProject-2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Detail Project-2</label>
                                <input type="text" name="detailProject-2" id="detailProject-2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Detail Project-2" required="">
                            </div>
                            <div class="w-full">
                                <label for="projectName-2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Project Name-2</label>
                                <input type="text" name="projectName-2" id="projectName-2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Project Name-2" required="">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="projectExplain-2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Project Explain-2</label>
                                <input type="text" name="projectExplain-2" id="projectExplain-2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Project Explain-2" required="">
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
                                <a href="/admin/about" class="flex items-center justify-center gap-1 font-medium py-1 px-2.5 text-base false">
                                    Back
                                </a>
                        </button>
                    </form>
                </div>
              </section>
        </div>
    </div>
@endsection