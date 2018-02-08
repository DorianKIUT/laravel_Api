<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Todos;
#use Request;

class testTodos extends Controller
{
    public function getTodos()
    {
    	

    	return Todos::all();

    	
    }
    public function store(Request $request)
    {
    	$todo = new Todos;
    	$todo->label = $request->label;
    	$todo->save();
    	return Todos::find($todo->id);

    }
    public function putTodos(Request $request, Todos $todo)
    {
    	$todo->label = $request->label;
    	$todo->isDone = $request->isDone;
    	$todo->save();
    	return $todo->fresh();
    }
    public function delTodos(Request $request, Todos $todo)
    {
    	
  		$todo = Todos::destroy($todo->id);

    }
}
