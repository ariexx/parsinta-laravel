<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
      return view('tasks.index', [
          'tasks' => Task::orderBy('id', 'desc')->get()
      ]);
    }

    public function store(Request $request)
    {
      $validate = $request->validate([
          'task' => 'required|min:5'
      ]);
      $validate['mark'] = false;

      Task::create($validate);
      return back();
    }

    public function edit($id)
    {
        //recomended menggunakan where
        // $task = Task::where('id', $id)->first();
        $task = Task::find($id); //untuk mencari id
        return view('tasks.edit', ['task' => $task]);
    }

    public function update(Request $request, $id)
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
