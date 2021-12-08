@extends('layouts.CrudPlantilla')

@section('contenido')
<h2>Crear tarea</h2>
<form action="/beginner/public/todo" method="POST">
    @csrf
<div class="mb-3">
  <label for="description" class="form-label">Tarea</label>
  <input type="text" class="form-control" id="title" name="title" placeholder="Tarea">
</div>
<div class="mb-3">
  <label for="description" class="form-label">Descripcion</label>
  <textarea class="form-control" id="description" name="description" rows="3"></textarea>

</div>

<a href="/beginner/public/todo" class="btn btn-secondary ">Cancelar</a>
<button class="btn btn-primary ">Agregar</button>
</form>
@endsection