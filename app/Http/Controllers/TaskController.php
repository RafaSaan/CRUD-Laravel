<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks= Task::all();
    return view('crud.index')-> with('tasks',$tasks);
}

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function create()
{
        return view('crud.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $tasks = new Task();
        $tasks->title = $request->get('title');
        $tasks->description = $request->get('description');

        $tasks->save();

        return redirect('/todo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $tasks= Task::find($id);

        return view('crud.edit')-> with('tasks',$tasks);
        // return redirect('/todo');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id

     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tasks= Task::find($id);
        $tasks->title = $request->get('title');
        $tasks->description = $request->get('description');

        $tasks->save();

        return redirect('/todo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)

    {
        $tasks= Task::find($id);
        $tasks->delete();
        return redirect('/todo');
    }
}
