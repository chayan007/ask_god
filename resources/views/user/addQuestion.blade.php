@extends('user.layout.user')
@section('title', 'Question Me')
    @section('content')
        @if(session('status'))
            <div class="alert alert-success" role="alert" align="center">
                <strong>{{ session('status') }}</strong>
            </div>
        @endif
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="font-style: italic; font-size: 30px;" align="center">Drop your question to God</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="/user/addQuestion">
                            {{ csrf_field() }}

                            <div class="form-group" align="center">
                                <textarea class="form-control" name="question" id="question" rows="3" style="outline: 2px solid deepskyblue; margin: 5px; padding: 10px" placeholder=" You need to describe the situation before you drop your question to God. Patience is the keyword to get answers.... "></textarea>
                                <p class="form-text text-muted" style="padding: 5px">
                                    Gods will answer your problem only when they will feel you need Answers. Don't ask "Who will be my wife ?". Shits like this can get you disbarred from this site.
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