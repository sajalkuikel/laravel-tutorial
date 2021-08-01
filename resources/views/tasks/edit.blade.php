@extends('tasks.form')

@section('title')
    Edit task
@endsection

@section('form-action')/tasks/{{ $task->id }}/edit @endsection

@section('submit-btn')
    Update
@endsection
