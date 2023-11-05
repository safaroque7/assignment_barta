@extends('layout.master')

@section('form3')
    <div class="w-50">
        <div class="flex justify-center">
            <form action="{{ route('formFinal') }}" method="POST">
                @csrf
                <label for="phone" class="block mb-2"> Phone Number </label>
                <input type="text" name="phone" id="phone" class="block mb-3 py-1 px-2" autofocus>
                <input type="hidden" name="email" id="" class="block" value="{{ $data['email'] }}">
                <input type="submit" value="Submit"
                    class="text-sm bg-gray-500 text-white px-2 py-1 rounded-sm hover:bg-gray-900 cursor-pointer">
            </form>
        </div>
    </div>
@endsection
