@extends('user.layout.user')
@section('title')
    {{ $god->name }}
@endsection

@section('content')
    <div @if($god->category == 'God' || $god->category == 'Angel')
                class="panel panel-primary"
         @elseif($god->category == 'Demon' || $god->category == 'Devil')
                class="panel panel-danger"
         @else
                class="panel panel-warning"
         @endif
         style="margin: 40px">
        <div class="panel-heading">
            <h3 class="panel-title" align="center">{{ $god->name }}</h3>
        </div>
        <div class="panel-body" align="center">
            <img src="@if($god->image) {{ Storage::url($god->image) }} @else {{ asset('images/admin.png') }}@endif" class="img-thumbnail" alt="" height="200px" width="200px">
            <blockquote class="blockquote">
                <p class="mb-0">{{ $god->description }}</p>
            </blockquote>
            <div class="btn-group btn-group-justified">
                <a href="/gods" class="btn btn-primary">Supernaturals</a>
                <a href="/" class="btn btn-warning">Home</a>
            </div>
        </div>
    </div>

@endsection