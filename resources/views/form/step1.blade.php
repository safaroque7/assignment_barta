<form action="{{ route('step2') }}" method="POST">
    @csrf
    <label for="name"> Name: </label>
    <input type="text" name="name" required autofocus>
    <button type="submit"> Next </button>
</form>

<a href="{{ url()->previous() }}"> Previous Link => {{ url()->previous() }} </a> <br>
<a href="{{ url()->full() }}"> Current Link => {{ url()->full() }} </a>