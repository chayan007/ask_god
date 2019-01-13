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
                @if($complaint->guidance != NULL)
                    <li class="list-group-item" style="padding-left: 40px; outline: 1px solid #ac2429;">
                        <blockquote class="blockquote">
                            <p class="mb-0">{{ $complaint->guidance }}</p>
                            <footer class="blockquote-footer"> <cite title="Source Title">God</cite></footer>
                        </blockquote>
                    </li>
                @endif
                <form action="/god/addGuidance/{{ $complaint->id }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="guidance">Guidance</label>
                        <textarea class="form-control" name="guidance" id="guidance" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-danger btn-block">Submit</button>
                </form>
            </ul>
        </div>
    @endforeach
    {{ $complaints->links() }}
@endsection