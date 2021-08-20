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
          'tasks' => Task::all()
      ]);
    }

    public function store(Request $request)
    {
      $validate = $request->validate([
          'task' => 'required|min:5'
      ]);

      Task::create($validate);
      return redirect('/tasks');
    }

    public function edit($id)
    {
        //no models
        //ambil table task kemudian cari id berdasarkan $id kemudian first()
        $task = DB::table('task')->where('id', $id)->first();
        return view('tasks.edit', ['task' => $task]);
    }

    public function update(Request $request, $id)
    {
        //update table "task"
        DB::table('task')->where('id', $id)->update(['task' => $request->task ]);
        return redirect('/tasks');
    }
}
