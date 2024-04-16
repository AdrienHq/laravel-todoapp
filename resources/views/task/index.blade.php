@extends('base')

@section('title', 'Homepage')

@section('content')
    <h1>hello</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
@endsection
