@extends('user.layout.user')
@section('title', 'My Questions')
    @section('content')
        @if(count($questions) < 1)
            <div class="alert alert-warning" role="alert" align="center" style="margin: 20px">
                <strong>You haven't yet asked any Questions yet.</strong>
            </div>
        @else
            @foreach($questions as $question)
                <div class="panel panel-warning" align="center" style="margin: 10px">
                    <div class="panel-heading">{{ Auth::user()->name }}</div>
                    <div class="panel-body">{{ $question->question }}</div>
                    <div class="panel-footer">
                        <blockquote class="blockquote">
                            <p class="mb-0">{{ $question->answer }}</p>
                            <footer class="blockquote-footer"> <cite title="Source Title" style="font-weight: bolder; font-size: large">{{ \Illuminate\Support\Facades\DB::table('lords')->where('id', $question->lord)->first()->name }}</cite>
                                <br><span class="badge badge-pill badge-primary" style="margin: 10px;">{{ \Illuminate\Support\Facades\DB::table('lords')->where('id', $question->lord)->first()->category }}</span>
                            </footer>
                        </blockquote>
                    </div>
                </div>
            @endforeach
        @endif
    @endsection