<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
      return view('tasks.index', [
        'task' => new Task,
        'tasks' => Task::orderBy('id', 'desc')->get(),
        'submit' => 'Submit'
      ]);
    }

    public function store(TaskRequest $request)
    {
      Task::create($request->all());
      return back();
    }

    public function edit(Task $task)
    {
        //recomended menggunakan where
        // $task = Task::where('id', $id)->first();
        // $task = Task::find($id); //untuk mencari id
        return view('tasks.edit', ['task' => $task, 'submit' => 'Update']);
    }

    public function update(TaskRequest $request, $id)
    {
        //update table "task"
        Task::where('id', $id)->update(['task' => $request->task ]);
        return redirect('/tasks');
    }

    public function destroy($id)
    {
      Task::find($id)->delete();
      return back();
    }
}
