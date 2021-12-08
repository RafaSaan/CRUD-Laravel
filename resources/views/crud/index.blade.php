@extends('layouts.CrudPlantilla')

@section('contenido')
<h2>Agregar tareas por hacer</h2>
<a href="todo/create" class="btn btn-primary btn-lg mt-4 ">Agregar</a>
<table class="table table-light table-striped mt-3">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Titulo</th>
      <th scope="col">Descripción</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
@foreach($tasks as $task)

<tr>
        <td>{{$task->id}}</td>
        <td>{{$task->title}}</td>
        <td>{{$task->description}}</td>
        <td>
        <form action="{{ route('todo.destroy', $task->id) }}" method="POST">

        <a href="todo/{{$task->id}}/edit" class="btn btn-info">Editar</a>         
            @csrf
            @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
        </form>  

        </form>          
        </td>        
    </tr>
@endforeach
</table>
@endsection