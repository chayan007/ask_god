@extends('god.layout.admin')
@section('page', 'Questions')
@section('content')
    @if(session('update'))
        <div class="alert alert-success" role="alert">
            <strong>{{ session('update') }}</strong>
        </div>
    @endif
    @if(session('delete'))
        <div class="alert alert-danger" role="alert">
            <strong>{{ session('delete') }}</strong>
        </div>
    @endif
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">List of Products</strong>
            </div>
            <div class="card-body">
                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Serial</th>
                        <th>User</th>
                        <th>Question</th>
                        <th>Answer</th>
                        <th>Lord</th>
                        <th>Slug</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($questions as $question)
                        <tr>
                            <td> {{ $loop->iteration }}</td>
                            <td>{{ DB::table('users')->where('id',$question->user)->first()->name }}</td>
                            <td>{{ $question->question }}</td>
                            <td>{{ $question->answer }}</td>
                            <td>@if($question->lord == NULL) NULL @else {{ DB::table('lords')->where('id',$question->lord)->first()->name }}@endif</td>
                            <td>{{ $question->slug }}</td>
                            <td><!-- Button trigger modal -->
                                <button type="button" class="btn btn-outline-warning btn-sm" data-toggle="modal"
                                        data-target="#modelId{{ $question->id }}">
                                    Answer
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="modelId{{ $question->id }}" tabindex="-1" role="dialog"
                                     aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title" id="modelTitleId">{{ $question->question }}</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/god/addAnswer/{{ $question->id }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="answer"></label>
                                                        <textarea class="form-control" name="answer" id="answer" rows="5"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="lord">Lord</label>
                                                        <select class="form-control" name="lord" id="lord">
                                                            @foreach($lords as $lord)
                                                            <option value="{{ $lord->id }}">{{ $lord->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <button type="submit" class="btn btn-success btn-block">
                                                        Submit
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td><a id="deletebtn" class="btn btn-outline-danger btn-sm" href="/deleteLord/{{ $question->id }}" role="button">Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $questions->links() }}
            </div>
        </div>
    </div>
@endsection