<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\DB;

class TasksController extends Controller
{
    public function index() {
        // return all tasks
        // $tasks = Task::all();
        $tasks = DB::table('tasks')->get();
        return view('dashboard', ['tasks'=>$tasks]);

        // dd($tasks);
    }

    public function createTaskForm() {
        return view('createTaskForm');
    }

    public function createNewTask(Request $request) {

        $title = $request->input('title');
        $description = $request->input('description');
        $progress = $request->input('progress');
        $status = $request->input('status');

        DB::table('tasks')->insert([
            'title'=>$title,
            'description'=>$description,
            'progress'=>$progress,
            'status'=>$status
        ]);

        return \redirect('/dashboard');
    }

    public function editTaskForm(Request $request, $id) {

        $task = DB::table('tasks')->where('id',$id)->get();

        return view('editTaskForm', ['task'=>$task]);
    }

    public function editTask(Request $request) {

        $id = $request->input('id');
        $title = $request->input('title');
        $description = $request->input('description');
        $progress = $request->input('progress');
        $status = $request->input('status');

        DB::table('tasks')->where('id',$id)->update([
            'title'=>$title,
            'description'=>$description,
            'progress'=>$progress,
            'status'=>$status
        ]);

        return \redirect('/dashboard');
    }

    public function editAllTasks() {

        $tasks = DB::table('tasks')->get();
        return view('editAllTasks', ['tasks'=>$tasks]);
    }

    public function deleteTask(Request $request, $id) {
        
        DB::table('tasks')->where('id',$id)->delete();
        return \redirect('/dashboard');
    }
}
