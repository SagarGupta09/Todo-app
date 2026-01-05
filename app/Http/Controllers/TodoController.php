<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

   public function index() {
    $user = Auth::user();

    if ($user->role === 'admin') {
        $todos = Todo::with('user')->get();  
    } else {
       
        $todos = $user->todos()->with('user')->get();  
    }

    return view('todos.index', compact('todos'));
}

    public function create() {
        return view('todos.create');
    }

    public function store(Request $request) {
        $request->validate(['title'=>'required']);
        Todo::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'user_id'=>Auth::id(),
        ]);
        return redirect()->route('todos.index');
    }

    public function edit(Todo $todo) {
        $this->authorize('update', $todo);
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, Todo $todo) {
        $this->authorize('update', $todo);
        $todo->update($request->only('title','description','status'));
        return redirect()->route('todos.index');
    }

    public function destroy(Todo $todo) {
        $this->authorize('update', $todo);
        $todo->delete();
        return redirect()->route('todos.index');
    }
}
