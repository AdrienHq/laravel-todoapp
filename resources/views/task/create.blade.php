@extends('base')

@section('title', 'Create Task')

@section('content')
    <h1>New task</h1>
    <div>
        <form method="post" action="/tasks">
            @csrf
            <div class="form-group">
                <label for="description">Task description</label>
                <input class="form-control" name="description"/>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-lg btn-success">Create task</button>
            </div>
        </form>
    </div>
    </div>
@endsection
