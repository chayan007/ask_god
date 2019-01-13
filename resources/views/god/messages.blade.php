@extends('god.layout.admin')
@section('page', 'Messages')
@section('content')
    @if(count($messages) < 1)
        <div class="alert alert-warning" role="alert" align="center" style="margin: 10px">
            <strong>No one has yet created any message !</strong>
        </div>
    @endif
    @foreach($messages as $message)
        <div class="panel panel-primary" style="margin: 5px; padding: 5px; outline: 2px groove black;">
            <div class="panel-heading">{{ DB::table('users')->where('id', $message->to)->first()->name }}</div>
            <div class="panel-body">
                <blockquote class="blockquote">
                    <p class="mb-0">{{ $message->message }}</p>
                    <footer class="blockquote-footer"> <cite title="Source Title">
                                {{ DB::table('users')->where('id', $message->from)->first()->name }}
                        </cite></footer>
                </blockquote>
            </div>
            <ul class="list-group">
                    @php $replys = $replies->where('message', $message->id) @endphp
                    @if(count($replys) > 0)
                        @foreach($replys as $reply)
                            <li class="list-group-item" style="padding-left: 40px;">
                                <blockquote class="blockquote">
                                    <p class="mb-0">{{ $reply->reply }}</p>
                                    <footer class="blockquote-footer"> <cite title="Source Title">{{ DB::table('users')->where('id', $reply->from)->first()->name }}</cite></footer>
                                </blockquote>
                            </li>
                        @endforeach
                    @endif
            </ul>
        </div>
    @endforeach

    {{ $messages->links() }}
@endsection