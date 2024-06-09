<!-- ======= pages/about/detail ======= -->

@extends('home')

@section('konten')
    <div class="bg-slate-950 py-14">
        <div class="container mx-auto px-4">
            <div class="text-center p-10">
                <h1 class="font-bold text-4xl mb-4 text-transparent bg-clip-text bg-gradient-to-r from-teal-900 to-slate-400">Detail Project</h1>
                <h1 class="text-3xl text-white">This is My Project</h1>
            </div>
            <div class="py-8">
                <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex flex-col md:flex-row -mx-4">
                        <div class="md:flex-1 px-4">
                            <div class="h-[460px] rounded-lg bg-gray-300 dark:bg-gray-700 mb-4">
                                <iframe class="shadow-md w-full h-full object-cover" frameborder="0" allowfullscreen="1"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    width="100%" height="100%"
                                    src="{{asset($data->video)}}"
                                    id="widget2">
                                </iframe>
                            </div>
                        </div>
                        <div class="md:flex-1 px-4">
                            <h2 class="text-2xl font-bold text-lime-800 mb-2">{{$data->title}}</h2>
                            <p class="text-slate-300 text-sm text-justify mb-4">
                                {{$data->explain}}
                            </p>
                            <div>
                                <span class="font-bold text-lime-800">Project Description</span>
                                <p class="text-slate-300 text-sm mt-2">Tools and Materials :</p>
                                <p class="text-slate-300 text-sm mt-2 mb-4 text-justify"> 
                                    {{$data->description}}
                                </p>
                                <p class="text-slate-300 text-sm">Features :</p>
                                <p class="text-slate-300 text-sm mt-2 mb-4 text-justify">
                                    {{$data->feature}}
                                </p>
                            </div>
                            <div class="border-t border-gray-700 mt-2 mb-4"></div>
                            <div class="flex -mx-2 mt-2">
                                <div class="w-full px-2">
                                    <a href="/terminal" class="text-white transition-colors bg-emerald-950 hover:bg-yellow-950 hover:ring-yellow-950 py-2 px-4 rounded-full font-bold">
                                        Running This Project
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
