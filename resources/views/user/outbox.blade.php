@extends('user.layout.user')
@section('title', 'Inbox')
@section('content')
    @foreach($messages as $message)
        <div class="panel panel-default">
            <div class="panel-heading">{{ DB::table('users')->where('id', $message->from)->first()->name }}</div>
            <div class="panel-body">
                <p>{{ $message->message }}</p>
            </div>
            <ul class="list-group">
                @php $replys = $replies->where('message', $message->id)->get() @endphp
                @foreach($replys as $reply)
                    <li class="list-group-item">{{ $reply->reply }}</li>
                @endforeach
                <li class="list-group-item">
                    <form action="/user/addReply/{{ $message->id }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="reply">Reply to this Message</label>
                            <input type="text" class="form-control" name="reply" id="reply" aria-describedby="helpId" placeholder="Type here...">
                        </div>
                        <button type="submit" class="btn btn-common btn-block">Submit</button>
                    </form>
                </li>
            </ul>
        </div>
    @endforeach
@endsection