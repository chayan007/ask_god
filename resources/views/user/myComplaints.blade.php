@extends('user.layout.user')
@section('title', 'My Complaints')
    @section('content')
        @if(count($complaints) < 1)
            <div class="alert alert-warning" role="alert">
                <strong>You haven't lodged any complaints yet</strong>
            </div>
        @else
            @foreach($complaints as $complaint)
                <div class="panel panel-info" style="margin: 10px; padding: 10px;">
                    <div class="panel-heading">{{ Auth::user()->name }}</div>
                    <div class="panel-body">{{ $complaint->complaint }}</div>
                    <div class="panel-footer">@if($complaint->guidance == NULL) Gods haven't yet checked your message @else {{ $complaint->guidance }}@endif</div>
                    @if(count($comments)>0)
                        @php $commentos = $comments->where('complaint', $complaint->id) @endphp
                        @if(count($commentos)>0)
                            @foreach($commentos as $comment)
                                <div class="list-group">
                                    <a href="/people/{{ DB::table('users')->where('id', $comment->user)->first()->name }}" class="list-group-item" style="margin: 10px; margin-left: 10px">
                                        <h4 class="list-group-item-heading"><b style="font-family: 'Bookman Old Style'">{{ DB::table('users')->where('id', $comment->user)->first()->name }}</b> has commented:</h4>
                                        <p class="list-group-item-text">{{ $comment->comment }}</p>
                                        <!-- Button trigger modal -->

                                        <!-- Modal -->
                                        <div class="modal fade" id="modelId{{ $comment->id }}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                                             aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h4 class="modal-title" id="modelTitleId">Reply to {{ DB::table('users')->where('id', $comment->user)->first()->name }}</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="/addReply/{{ $comment->id }}" method="POST">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label for="reply">Reply</label>
                                                                <textarea class="form-control" name="reply" id="reply" rows="5"></textarea>
                                                            </div>
                                                            <button type="submit" class="btn btn-outline-success">Submit</button>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        @endif
                    @endif
                    <div class="list-group">
                        <a href="#" class="list-group-item" style="margin: 10px; margin-left: 10px">
                            <h4 class="list-group-item-heading">Add a comment:</h4><form>
                                <textarea name="" style="-webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; width: 100%;"  rows="10" placeholder="Add a Comment" style="width: 100%"></textarea>
                            </form>
                        </a>
                    </div>
                </div>
            @endforeach
        @endif
    @endsection