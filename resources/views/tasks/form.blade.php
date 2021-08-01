
@extends('layouts.app')

@section('content')
<div class="container">
    <form action="@yield('form-action')" method="post">
        @csrf
    <div class="col-12 col-lg-6">
        <div class="mb-3">
            <label for="name" class="form-label">Task name: </label>
            <input type="text" class="form-control" id="name" name="name"
                   value="@if(isset($task)){{ $task->name }}@else{{ '' }}@endif" >
        </div>
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        <div class="mb-3">
            <label for="start_date" class="form-label">Start Date: </label>
            <input type="date" class="form-control" id="start_date" name="start_date"
                   value="@if(isset($task)){{ $task->start_date }}@else{{ '' }}@endif">
        </div>
            @error('start_date')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        <div class="mb-3">
            <label for="due_date" class="form-label">Due Date: </label>
            <input type="date" class="form-control" id="due_date" name="due_date"
                   value="@if(isset($task)){{ $task->due_date }}@else{{ '' }}@endif">
        </div>
            @error('due_date')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        <div class="mb-3">
            <button type="submit" class="btn btn-primary"> @yield('submit-btn') </button>
        </div>

    </div>
</form>
</div>
@endsection
