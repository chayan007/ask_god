@extends('user.layout.user')
@section('title', 'Gods')

@section('content')
    <div class="row" style="text-align: center">
        @foreach($lords as $lord)
            <div class="col-sm-6 col-lg-2" style="margin: 5px; height: 400px;">
                <div class="thumbnail">
                    <img src="{{ Storage::url($lord->image) }}" width="100px" height="100px" class="img-circle">
                    <div class="caption">
                        <blockquote class="blockquote">
                            <p class="mb-0">{{ substr($lord->description,0,50) }} . . .</p>
                            <footer class="blockquote-footer"> <cite title="Source Title">{{ $lord->name }}, {{ $lord->category }}</cite></footer>
                        </blockquote>
                        <p>
                            <a href="/gods/{{ $lord->slug }}" class="btn btn-common btn-block" role="button">See More</a>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <center>
        {{ $lords->links() }}
    </center>
@endsection