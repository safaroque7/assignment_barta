@extends('layout.master')

@section('form2')
    <div class="w-50">
        <div class="flex justify-center">
            <form action="{{ route('form3') }}" method="POST">
                @csrf
                <label for="email" class="block mb-2"> Email </label>
                <input type="email" name="email" id="email" class="block mb-3 py-1 px-2" required autofocus>
                <input type="hidden" name="name" class="block" value="{{ $data['name'] }}">
                <input type="submit" value="Submit"
                    class="text-sm bg-gray-500 text-white px-2 py-1 rounded-sm hover:bg-gray-900 cursor-pointer">
            </form>
        </div>
    </div>
@endsection
