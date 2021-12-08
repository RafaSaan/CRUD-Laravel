@extends('layouts.CrudPlantilla')

@section('contenido')
<h2>Editar tarea</h2>
<form action="/beginner/public/todo/{{$tasks->id}}" method="POST">
    @csrf
    @method('PUT')
<div class="mb-3">
  <label for="description" class="form-label">Tarea</label>
  <input type="text" class="form-control" id="title" name="title" placeholder="Tarea" value="{{$tasks->title}}">
</div>
<div class="mb-3">
  <label for="description" class="form-label">Descripcion</label>
  <input class="form-control" id="description" name="description" rows="3" value="{{$tasks->description}}"></input>

</div>

<a href="/beginner/public/todo" class="btn btn-secondary ">Cancelar</a>
<button type="submit" class="btn btn-primary ">Editar</button>
</form>
@endsection