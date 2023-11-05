@extends('layout.master')

@section('form1')
    <div class="w-50">
        <div class="flex justify-center">
            <form action="{{ route('form2') }}" method="POST">
                @csrf
                <label for="name" class="block mb-2"> Name </label>
                <input type="text" name="name" id="name" class="block mb-3 py-1 px-2" required autofocus>
                <input type="submit" value="Submit"
                    class="text-sm bg-gray-500 text-white px-2 py-1 rounded-sm hover:bg-gray-900 cursor-pointer">
            </form>
        </div>
    </div>
@endsection
