<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

// use Log;

class TodoListController extends Controller
{

    public function create(){
        return view('todos.create');
    }


    public function store(Request $request){
    
        Todo::create(['user_id' => auth()->id()] + $request->all());
        $todos= Todo::where('user_id',auth()->id())->get();//check if th user is logged  then it return this todo 
        return view('todos.index', compact('todos'));
    }

    public function index(){
        $todos= Todo::where('user_id',auth()->id())->get();//check if th user is logged  then it return this todo 
        return view('todos.index', compact('todos'));

    }

    public function updateStatus($id){
        // Log::info(''.$id);
        $listitem= todo::find($id);
        $listitem->isCompleted= 1;
        $listitem->save();
        return redirect('/');

    }


    public function destroy(Todo $todo){
     if(auth()->id() == $todo->user_id){
        $todo->delete();
        return redirect()->route('todos.index');
     }else{
        return redirect()->route('todos.index')->withErrors('error','not allowed ');

    }}

    public function edit(Todo $todo) //this to show the editing page 
    {
        // Log::info('Auth ID: ' . auth()->id());
        // Log::info('Todo User ID: ' . $todo->user_id);
    
        if (auth()->id() == $todo->user_id) {
            return view('todos.edit', compact('todo'));
        }
        return redirect()->route('todos.index')->withErrors(['msg' => 'Unauthorized']);
    }


    public function update(Request $request, Todo $todos){ //this method is actually to update the chosen task
   if(auth()->id() == $todos->user_id) {
    $todos->update($request->all());
    return redirect()->route('todos.index');
    }else{

return redirect()->route('todos.index')->withErrors(['msg'=> 'cant edit']);
    }}
    
    
}
