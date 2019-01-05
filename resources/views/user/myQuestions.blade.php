@extends('user.layout.user')
@section('title', 'My Questions')
    @section('content')
        @if(count($questions) < 1)
            <div class="alert alert-warning" role="alert" align="center" style="margin: 20px">
                <strong>You haven't yet asked any Questions yet.</strong>
            </div>
        @else
            <div class="panel panel-warning" align="center">
                <div class="panel-heading">Chayan Datta</div>
                <div class="panel-body">Question is this ??</div>
                <div class="panel-footer">
                    <blockquote class="blockquote">
                        <p class="mb-0">Ok this is answer</p>
                        <footer class="blockquote-footer"> <cite title="Source Title">Minx</cite></footer>
                    </blockquote>
                </div>
            </div>
        @endif
    @endsection