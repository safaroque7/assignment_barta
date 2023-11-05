<form action="/save" method="POST">
    @csrf
    <input type="email" name="email" placeholder="Email Address">

    <button type="submit"> Save </button>
</form>
{{ dd(session()->all()) }}
<a href="{{ url()->previous() }}"> Previous Link => {{ url()->previous() }} </a> <br>
<a href="{{ url()->full() }}"> Current Link => {{ url()->full() }} </a>
