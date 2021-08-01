@extends('layouts.app')

@section('title')
 Task | {{ $task->name }}
@endsection

@section('content')
<div class="container">

    <h1> Task :      {{ $task->name }} </h1>
    <p> Start date  : {{ $task->start_date  }}</p>
    <p> Due  date  : {{ $task->due_date  }}</p>

    <form action="/tasks/{{ $task->id }}" method="post">
        @csrf
        @if($task->completed == false)
            <input  type="submit" class="btn btn-success" value=" Mark completed ">
        @else
            <input  type="submit" class="btn btn-secondary" value="Mark incomplete" >
        @endif
    </form>

</div>
@endsection
