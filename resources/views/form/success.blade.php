<body>
    <h1> {{ session('status') }} </h1>
    <p> Your form submission was successful! Here are the details your provided: </p>
    <ul>
        <li><strong>Name:</strong> {{ $data['name'] }} </li>
        <li><strong>Email:</strong> {{ $data['email'] }} </li>
    </ul>
    <p> Thank you for submiting the form. </p>
    <hr>
    <a href="{{ route('reset') }}" type="button"> Reset Form </a> <br>
    
    <a href="{{ url()->previous() }}"> Previous Link => {{ url()->previous() }} </a> <br>
    <a href="{{ url()->full() }}"> Current Link => {{ url()->full() }} </a>
    
    

</body>
