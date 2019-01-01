@extends('user.layout.user')
@section('title', 'Add Complaint')
    @section('content')
        @if(session('status'))
            <div class="alert alert-success" role="alert">
                <strong>{{ session('status') }}</strong>
            </div>
        @endif
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="font-style: italic; font-size: 30px;">Lodge Complaint</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="/user/addComplaint">
                            {{ csrf_field() }}

                            <div class="form-group" align="center">
                                <textarea class="form-control" name="complaint" id="complaint" rows="3" style="outline: 2px solid deepskyblue; margin: 5px; padding: 10px"></textarea>
                                <p class="form-text text-muted" style="padding: 5px">
                                    Make sure you describe your problem properly. Gods want to empathize your problem before giving you guidance. Other users may also give you guidance on it.
                                </p>
                            </div>
                            <button type="submit" class="btn btn-common btn-block">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    @endsection