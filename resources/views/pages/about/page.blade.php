<!-- ======= pages/about/page ======= -->

@extends('home')
    
@section('konten')
    <div class="bg-slate-950 py-14">
        <div class="container mx-auto px-4">
            <div class="text-center p-10">
                <h1 class="font-bold text-4xl mb-4 text-transparent bg-clip-text bg-gradient-to-r from-teal-900 to-slate-400">About Me</h1>
                <h1 class="text-3xl text-white">Projects That Have Been Undertaken</h1>
            </div>
            <div class="relative inline-block bottom-5 mt-5 -right-3/4 mx-40">
                <div class="group">
                    <button type="button"
                        class="inline-flex justify-center items-center w-full px-2 py-2 rounded-xl text-sm font-bold text-slate-300 bg-teal-950">
                        . . .
                        <!-- Dropdown arrow -->
                        <svg class="w-4 h-4 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 12l-5-5h10l-5 5z" />
                        </svg>
                    </button>
            
                    <!-- Dropdown menu -->
                    <div
                        class="z-10 py-3 absolute left-0 w-40 mt-0 origin-top-left bg-yellow-950 rounded-md shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-300">
                        <div class="py-1">
                            <a href="/myprojects" class="block px-4 py-2 text-sm font-medium text-slate-300 hover:bg-slate-950">My Projects</a>
                            <a href="/mycertificates" class="block px-4 py-2 text-sm font-medium text-slate-300 hover:bg-slate-950">My Certificates</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-5">
                @foreach ($data as $isi)
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <div class="relative overflow-hidden">
                            <img class="object-cover w-full h-56" src="{{$isi->img}}" alt="ParalelAdderCircuit.jpeg">
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


