<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todos;

class TodoController extends Controller
{
    public function index() {
        $model = Todos::all();
        return $model;
    }
    
    public function create() {
        return view('todos/create');
    }
    
    public function create_post(Request $request, Todos $todo) {
        $todo->title = $request->title;
        $todo->detail = $request->input('detail');
        $todo->ontime = $request->input('ontime');
        $todo->status = $request->input('status') == "on" ? 1 : 0;
        $todo->save();
        
        return redirect('/todos');
    }
    
    public function update($id) {
        $todo = Todos::find($id);
        
        return view('todos/update', $todo);
    }
    
    public function update_post(Request $request, $id) {
        $todo = Todos::find($id);
        $todo->title = $request->title;
        $todo->detail = $request->input('detail');
        $todo->ontime = $request->ontime;
        $todo->status = $request->input('status') == "on" ? 1 : 0;
        $todo->save();
        return view('todos/update', $todo);
    }
}
