<!-- ======= pages/about/terminal ======= -->

@extends('home')

@section('konten')
    <div class="bg-slate-950 py-14">
        <div class="container mx-auto px-4">
            <div class="text-center p-10">
                <h1 class="font-bold text-4xl mb-4 text-transparent bg-clip-text bg-gradient-to-r from-teal-900 to-slate-400">Detail Project</h1>
                <h1 class="text-3xl text-white">Running This Project</h1>
            </div>
            <div class="mt-10" id="terminal">
                @isset($output)
                    {!! nl2br(e($output)) !!}
                @endisset
                @foreach ($command as $command)
                    <p>{{ $command->id }}: {{ $command->command }}</p>
                    <pre>{{ $command->output }}</pre>
                @endforeach
            </div>
            <form class="mt-5" action="{{ url('/execute-command') }}" method="post">
                @csrf
                <input class="rounded-full" type="text" id="command" name="command" placeholder="Enter command" autocomplete="off">
                <button class="text-white transition-colors bg-emerald-950 hover:bg-yellow-950 hover:ring-yellow-950 py-2 px-4 rounded-full font-bold" type="submit">Execute</button>
            </form>
        </div>
    </div>
@endsection
