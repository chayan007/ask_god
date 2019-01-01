@extends('user.layout.user')
@section('title', 'Outbox')
@section('content')
    @if(count($messages) < 1)
        <div class="alert alert-warning" role="alert" align="center" style="margin: 10px">
            <strong>You have not send anyone a message !</strong>
        </div>
    @endif
    @foreach($messages as $message)
        <div class="panel panel-primary" style="margin: 15px;">
            <div class="panel-heading">{{ DB::table('users')->where('id', $message->from)->first()->name }}</div>
            <div class="panel-body">
                <blockquote class="blockquote">
                    <p class="mb-0">{{ $message->message }}</p>
                    <footer class="blockquote-footer"> <cite title="Source Title">
                            @if($message->is_anonymous)
                                Anonymous
                            @else
                                {{ DB::table('users')->where('id', $message->from)->first()->name }}
                            @endif
                        </cite></footer>
                </blockquote>
            </div>
            <ul class="list-group">
                @if(count($replies) > 0)
                    @php $replys = $replies->where('message', $message->id)->get() @endphp
                    @if(count($replys) > 0)
                        @foreach($replys as $reply)
                            <li class="list-group-item" style="padding-left: 40px;">
                                <blockquote class="blockquote">
                                    <p class="mb-0">{{ $reply->reply }}</p>
                                    <footer class="blockquote-footer"> <cite title="Source Title">{{ Auth::user()->name }}</cite></footer>
                                </blockquote>
                            </li>
                        @endforeach
                    @endif
                @endif
            </ul>
        </div>
    @endforeach
@endsection