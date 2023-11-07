@extends('layout.master')

@section('homebody')
    <div class="text-center p-12 border border-gray-800 rounded-xl">
        <h1 class="text-3xl justify-center items-center">Welcome to Barta!</h1>
        {{-- <h1> {{ session('team') }} </h1> --}}
        {{-- {{ dd(session()->all()) }} --}}
        {{-- {{ dd(session("theme", "dark")) }} --}}
        {{-- {{ dd(session()->forget(['theme', 'team'])) }} --}}
        {{-- {{ session()->all()}} --}}
        {{-- {{ session()->pull("country"); }} --}}
        {{-- {{ session('name') }} --}}

        <a href="{{ route('form1') }}"> Form 1 </a>

        {{-- <h1> Current User ID </h1>
        {{ $user_id }}
        <h1> Cureent User's name </h1>
        {{ $user_name }} --}}
    </div>
@endsection
