@extends('god.layout.admin')
@section('page', 'Complaints')
@section('content')
    @if(count($complaints) < 1)
        <div class="alert alert-warning" role="alert" align="center" style="margin: 10px">
            <strong>No one has yet created any complaint !</strong>
        </div>
    @endif
    @foreach($complaints as $complaint)
        <div class="panel panel-primary" style="margin: 5px; padding: 5px; outline: 2px groove black;">
            <div class="panel-heading">{{ DB::table('users')->where('id', $complaint->user)->first()->name }}</div>
            <div class="panel-body">
                <blockquote class="blockquote">
                    <p class="mb-0">{{ $complaint->complaint }}</p>
                </blockquote>
            </div>
            <ul class="list-group">
                @php $commentos = $comments->where('complaint', $complaint->id) @endphp
                @if(count($commentos) > 0)
                    @foreach($commentos as $comment)
                        <li class="list-group-item" style="padding-left: 40px;">
                            <blockquote class="blockquote">
                                <p class="mb-0">{{ $comment->comment }}</p>
                                <footer class="blockquote-footer"> <cite title="Source Title">{{ DB::table('users')->where('id', $comment->user)->first()->name }}</cite></footer>
                            </blockquote>
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
        {{ $complaints->links() }}
    @endforeach
@endsection