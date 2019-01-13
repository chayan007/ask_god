@extends('user.layout.user')
@section('title', DB::table('users')->where('id', $complaint->user)->first()->name)
    @section('content')
        @if(session('status'))
            <div class="alert alert-success" role="alert">
                <strong>{{ session('status') }}</strong>
            </div>
        @endif
        <div class="panel panel-warning" style="margin: 10px;" align="center">
            <div class="panel-heading"> <a href="/people/{{ DB::table('users')->where('id', $complaint->user)->first()->username }}"><b>{{ DB::table('users')->where('id', $complaint->user)->first()->name }}</b></a> has complained the following</div>
            <div class="panel-body">{{ $complaint->complaint }}</div>
            <div class="panel-footer">
                @if($complaint->guidance == NULL)
                    Gods haven't yet checked out your site
                @else
                    {{ $complaint->guidance }}
                @endif
            </div>
        </div>
        <div class="list-group" style="margin: 10px;">
            @foreach($comments as $comment)
                <a href="/people/{{ DB::table('users')->where('id', $comment->user)->first()->username }}" class="list-group-item">
                    <h4 class="list-group-item-heading"><b>{{ DB::table('users')->where('id', $comment->user)->first()->name }}</b> has commented: </h4>
                    <p class="list-group-item-text" style="padding: 10px; font-family: 'Bodoni MT Black';">{{ $comment->comment }}</p>
                </a>
            @endforeach
                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">Add a comment :</h4>
                    <form action="/user/addComment/{{ $complaint->id }}" method="POST">
                        @csrf
                        <textarea name="comment" style="-webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; width: 100%;" rows="10"></textarea>
                        <button type="submit" class="btn btn-primary btn-block">Submit
                        </button>
                    </form>
                </a>
        </div>
    @endsection
