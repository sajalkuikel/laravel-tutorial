<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
    public function index(){
        $tasks = Task::paginate(3);

        return view('tasks.index', compact('tasks')) ;
    }

    public function show( Task $task)
    {
        return view('tasks.show', compact('task'));
    }
    public function create()
    {
        return view('tasks.create');
    }
    public function store(Request $request)
    {
        $this->validate( request() , [
            'name' => 'required|min:2',
            'start_date' => 'required',
            'due_date' => 'required'
        ]);
        $task = new Task();
        $task->name =  request('name');
        $task->start_date =  request('start_date');
        $task->due_date =  request('due_date');
        $task->save();

        return redirect('/tasks');
    }
}

