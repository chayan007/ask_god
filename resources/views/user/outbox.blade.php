@extends('user.layout.user')
@section('title', 'Outbox')
@section('content')
    @if(count($messages) < 1)
        <div class="alert alert-warning" role="alert" align="center" style="margin: 10px">
            <strong>You have not send anyone a message !</strong>
        </div>
    @endif
    @foreach($messages as $message)

        @php $a =0; if($message->is_anonymous) $a = 1; else $a = 0; @endphp

        <div class="panel panel-primary" style="margin: 15px;">
            <div class="panel-heading">@if(!$a){{ DB::table('users')->where('id', $message->from)->first()->name }}@else Anonymous @endif</div>
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
                @if($replies != NULL)
                    @php $replys = $replies->where('message', $message->id)->get() @endphp
                    @if(count($replys) > 0)
                        @foreach($replys as $reply)
                            <li class="list-group-item" style="padding-left: 40px;">
                                <blockquote class="blockquote">
                                    <p class="mb-0">{{ $reply->reply }}</p>
                                    <footer class="blockquote-footer"> <cite title="Source Title">{{ \Illuminate\Support\Facades\DB::table('users')->where('id', $reply->from)->first()->name }}</cite></footer>
                                </blockquote>
                            </li>
                        @endforeach
                    @endif
                @endif
            </ul>
        </div>
    @endforeach
@endsection