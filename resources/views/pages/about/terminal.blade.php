<!-- ======= pages/about/terminal ======= -->

@extends('home')

@section('konten')
    <div class="bg-slate-950 py-14">
        <div class="container mx-auto px-4">
            <div class="text-center p-10">
                <h1 class="font-bold text-4xl mb-4 text-transparent bg-clip-text bg-gradient-to-r from-teal-900 to-slate-400">Detail Project</h1>
                <h1 class="text-3xl text-white">Running This Project</h1>
            </div>

            @include('pages.about.dropdown')

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
            <form action="{{ url('/send-gcode') }}" method="post">
                @csrf
                <label for="x_value">X Value (0-1000):</label>
                <input type="range" id="x_value" name="x_value" min="0" max="1000" class="slider" oninput="updateXValueDisplay(this.value)">
                <span id="x_value_display">0</span>
                <br>
                <label for="f_value">F Value (0-4000):</label>
                <input type="range" id="f_value" name="f_value" min="0" max="4000" class="slider" oninput="updateFValueDisplay(this.value)">
                <span id="f_value_display">0</span>
                <br>
                <button type="submit">Send G-code</button>
            </form>
        
            <script>
                function updateXValueDisplay(value) {
                    document.getElementById('x_value_display').innerText = value;
                }
        
                function updateFValueDisplay(value) {
                    document.getElementById('f_value_display').innerText = value;
                }
            </script>
        </div>
    </div>
@endsection
