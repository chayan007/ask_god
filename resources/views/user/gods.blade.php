@extends('user.layout.user')
@section('title', 'Gods')

@section('content')
    <div class="row" style="text-align: center">
        @foreach($lords as $lord)
            <div class="col-sm-6 col-md-4 col-lg-3" style="margin: 10px;">
                <div class="thumbnail">
                    <img src="{{ Storage::url($lord->image) }}" width="100px" height="100px" class="img-circle">
                    <div class="caption">
                        <blockquote class="blockquote">
                            <p class="mb-0">{{ substr($lord->description,0,50) }} . . .</p>
                            <footer class="blockquote-footer"> <cite title="Source Title">{{ $lord->name }}</cite></footer>
                        </blockquote>
                        <p>
                            <a href="/gods/{{ $lord->slug }}" class="btn btn-common" role="button">See More</a>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection