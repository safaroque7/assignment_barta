{{ session('status') }}

<form action="{{ route('final_step') }}" method="POST">
    @csrf
    <label for="email"> Email </label>
    <input type="email" name="email" value="" required autofocus>
    <input type="hidden" name="name" value="{{ $data['name'] }}">

    <button type="submit"> Submit </button>
</form>

<a href="{{ url()->previous() }}"> Previous Link => {{ url()->previous() }} </a> <br>
<a href="{{ url()->full() }}"> Current Link => {{ url()->full() }} </a>

