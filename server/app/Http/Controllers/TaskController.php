<?php
namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller{

    public function get_all(){
        $data = Task::all();
        return view('home')->with("data", $data);
    }

    public function get_one($id){
        $data = Task::where("id", $id)->first();
        return view('each')->with("data", $data);
    }

    public function edit_one($id){
        $data = Task::where("id", $id)->first();
        return view('edit')->with("data", $data);
    }

    public function delete_one($id){
        $task = Task::find($id);
        $task->delete();
        return redirect('/');
    }

    public function update_one(Request $request,$id){
        $task = Task::find($id);

        $task->task = $request->task;

        if($request->complete){
            $task->completed = $request->complete;
        }else{
            $task->completed = 0;
        }
        $task->save();

        return redirect('/task/'. $id. '');
    }
    
    public function create_one(Request $request){
        $new  = new Task;
        $new->task = $request->task;
        $new->save();
        return redirect('/');
    }
}