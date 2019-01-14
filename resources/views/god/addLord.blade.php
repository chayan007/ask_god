@extends('god.layout.admin')
@section('page', 'Lord')
@section('content')
    <form action="/god/addLord" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="">
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control-file" name="image" id="image" placeholder="" aria-describedby="fileHelpId">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <select class="form-control" name="category" id="category">
                <option>God</option>
                <option>Devil</option>
                <option>Angel</option>
                <option>Demon</option>
                <option>Supernatural</option>
                <option>DemiGod</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
@endsection