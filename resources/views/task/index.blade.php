@extends('base')

@section('title', 'Homepage')

@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{--    @include('task.edit')--}}

    <div class="row mb-5">
        <div class="col-9">
            <h1 class="mb-4">{{ 'Today\'s task' }}@if($todayTasks->count() > 1)s ({{ $todayTasks->count() }})
                @endif - {{ now()->format('d/m/Y') }}</h1>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tache</th>
                    <th scope="col">Description</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($todayTasks as $task)
                    <tr>
                        <th scope="row">{{ $loop->index + 1}}</th>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                        <td> {{ date('d-m-Y ', strtotime($task->created_at)) }}</td>
                        <td>
                            <button class="btn btn-sm btn-primary" type="submit" form="form1" value="Submit">Edit</button>
                            <button class="btn btn-sm btn-danger" type="submit" form="form1" value="Submit">Delete</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-3">
            @include('task.create')
        </div>
    </div>
    <div class="row mt-5 border-top">
        <div class="col-9">
            <h2 class="mt-5 mb-4">{{ 'All your task' }}@if($tasks->count() > 1)s ({{$tasks->count() }})
                @endif - {{ now()->format('d/m/Y') }}</h2>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tache</th>
                    <th scope="col">Description</th>
                    <th scope="col">Date</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tasks as $task)
                    <tr>
                        <th scope="row">{{ $loop->index + 1}}</th>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                        <td> {{ date('d-m-Y ', strtotime($task->created_at)) }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
