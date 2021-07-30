
@extends('layouts.app')

@section('content')
<div class="container">
    <h1> All tasks </h1>
    <br>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Task name</th>
            <th scope="col">Start date </th>
            <th scope="col">Due date </th>
            <th scope="col">Flag </th>
        </tr>
        </thead>
        <tbody>
        @foreach($tasks as $task)
        <tr>
            <th scope="row"> {{ $task->id }}</th>
            <td>  <a href="/tasks/{{ $task->id }}">  {{ $task->name }} </a></td>
            <td>{{ $task->start_date }}</td>
            <td>{{ $task->due_date }}</td>
            <td>
                @if(!$task->completed)
                    {{ 'Pending' }}
                @else
                    {{ 'Completed' }}
                @endif
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <a  href="/tasks/create" class="btn btn-primary"> Create new task</a>
</div>

@endsection
