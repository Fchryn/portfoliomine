<!-- ======= pages/about/page ======= -->

@extends('home')
    
@section('konten')
    <div class="bg-slate-950 py-14">
        <div class="container mx-auto px-4">
            <div class="text-center p-10">
                <h1 class="font-bold text-4xl mb-4 text-transparent bg-clip-text bg-gradient-to-r from-teal-900 to-slate-400">About Me</h1>
                <h1 class="text-3xl text-white">Projects That Have Been Undertaken</h1>
            </div>
            
            @include('pages.about.dropdown')

            <div class="grid grid-cols-1 md:grid-cols-4 gap-5">
                @foreach ($data as $isi)
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <div class="relative overflow-hidden">
                            <img class="object-cover w-full h-56" src="{{$isi->img}}">
                            <div class="absolute inset-0 bg-black opacity-40"></div>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <a href="/myprojects/{{$isi->id}}" class="bg-white text-gray-900 py-2 px-6 rounded-full font-bold hover:bg-gray-300">View Project</a>
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


