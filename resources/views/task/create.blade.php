{{--@extends('base')--}}

{{--@section('title', 'Create Task')--}}

{{--@section('create')--}}
    <h4 class="text-primary">New task</h4>
    <div>
        <form method="post" action="/create">
            @csrf
            <div class="form-group">
                <label for="title">Task title</label>
                <input class="form-control" name="title"/>
                @error("title")
                {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Task description</label>
                <input class="form-control" name="description"/>
                @error("description")
                {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-lg btn-success">Create task</button>
            </div>
        </form>
    </div>
{{--@endsection--}}
