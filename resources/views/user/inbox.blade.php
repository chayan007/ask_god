@extends('user.layout.user')
@section('title', 'Inbox')
    @section('content')
        @if(count($messages) < 1)
            <div class="alert alert-warning" role="alert" align="center" style="margin: 10px">
                <strong>No one has left you a message yet !</strong>
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
                    @if($replies == NULL)
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
                    <li class="list-group-item" style="margin: 30px; padding: 20px;">
                        <form action="/user/addReply/{{ $message->id }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="reply">Reply to this Message</label>
                                <textarea name="reply" class="form-control" id="reply" cols="20" rows="5" placeholder="Type here..." style="outline: 1px solid blue;"></textarea>
                            </div>
                            <button type="submit" class="btn btn-common btn-block">Submit</button>
                        </form>
                    </li>
                </ul>
            </div>
        @endforeach
    @endsection