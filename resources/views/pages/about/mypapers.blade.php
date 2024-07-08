<!-- ======= pages/about/page ======= -->

@extends('home')
    
@section('konten')
    <div class="bg-slate-950 py-14">
        <div class="container mx-auto px-4">
            <div class="text-center p-10">
                <h1 class="font-bold text-4xl mb-4 text-transparent bg-clip-text bg-gradient-to-r from-teal-900 to-slate-400">About Me</h1>
                <h1 class="text-3xl text-white">Papers That Have Been Undertaken</h1>
            </div>

            @include('pages.about.dropdown')

            <div class="grid grid-cols-1 md:grid-cols-4 gap-5">
                @foreach ($data as $isi)
                    <div class="bg-white rounded-lg shadow-lg p-6 hover:ring-4">
                        <div class="relative overflow-hidden">
                            <div class="h-[300px] rounded-lg bg-gray-300 dark:bg-gray-700 mb-4">
                                <iframe class="shadow-md w-full h-full object-cover" frameborder="0" allowfullscreen="1"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    width="100%" height="100%"
                                    src="{{$isi->video}}"
                                    id="widget2">
                                </iframe>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 text-center mt-4">{{$isi->title}}</h3>
                        <p class="text-gray-500 text-sm text-justify mt-2">
                            {{$isi->explain}}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection


