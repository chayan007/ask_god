@extends('user.layout.user')
@section('content')
    <blockquote class="blockquote">
        <p class="lead">
            Welcome {{ $name }},
        </p>
        <p class="mb-0">
            Enjoy the therapeutic sessions with the Gods and the Devil.
            Enjoy the beautiful journey with our website.
            Just remember that patience is the only key to get most out of it
        </p>
        <footer class="blockquote-footer"> <cite title="Source Title">Creator</cite></footer>
    </blockquote>
@endsection