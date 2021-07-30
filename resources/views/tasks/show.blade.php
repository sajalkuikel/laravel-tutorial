@extends('layouts.app')

@section('content')
<div class="container">

    <h1> Task :      {{ $task->name }} </h1>
    <p> Start date  : {{ $task->start_date  }}</p>
    <p> Due  date  : {{ $task->due_date  }}</p>

    <button class="btn btn-success"> Mark completed</button>
</div>
@endsection
