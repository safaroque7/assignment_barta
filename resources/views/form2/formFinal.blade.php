@extends('layout.master')

@section('form3')
    <div class="w-50">
        <div class="flex justify-center col">
            <form action="#" method="POST" class="block">
                @csrf
                <label for="phone" class="block mb-2 font-semibold"> Your all kind of information here. </label>
                <h1> Name : {{ $data['name'] }} </h1>
                <h1> Email : {{ $data['email'] }} </h1>
                {{-- <h1> Phone : {{ $data['phone'] }} </h1> --}}
            </form>
        </div>
        <a class="text-center bg-gray-500 text-white py-1 px-2 rounded-sm flex justify-center" href="{{ '/' }}">
            Home Page </a>
    </div>
@endsection
