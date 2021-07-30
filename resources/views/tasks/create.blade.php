
@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/tasks" method="post">
        @csrf
    <div class="col-12 col-lg-6">
        <div class="mb-3">
            <label for="name" class="form-label">Task name: </label>
            <input type="text" class="form-control" id="name" name="name" >
        </div>
        <div class="mb-3">
            <label for="start_date" class="form-label">Start Date: </label>
            <input type="date" class="form-control" id="start_date" name="start_date">
        </div>
        <div class="mb-3">
            <label for="due_date" class="form-label">Due Date: </label>
            <input type="date" class="form-control" id="due_date" name="due_date">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary"> Add task </button>
        </div>
    </div>
</form>
</div>
@endsection
