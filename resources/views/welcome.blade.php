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
    </div>
@endsection
