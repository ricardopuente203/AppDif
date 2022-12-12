@include('layouts.app')
@section('title','Almacen')
@section('content')
     
@csrf
    <p>Listado del inventario</p>
    <div class="row">
    @foreach ($inventario as $inventario)
    <div class="col-sm">
    <div class="card" style="width: 18rem;"> 
 
  <div class="card-body">
    <h5 class="card-title">{{$inventario->name}}</h5>
    <h5 class="card-title">Nombre del apoyo: {{$inventario->NameApoyo}}</h5>
    <h5 class="card-title">Descripcion del apoyo:{{$inventario->NumeroDespensas}}</h5>
    
    
    <p class="card-text">Some quick example text</p>
    <button type="submit"class="btn btn-primary">
    Guardar</button>
    <a href="/inventario/create{{$inventario->create}}"class="btn btn-secondary">
      Añadir...</a>
      <a href="inventario/{{$inventario->id}}"class="btn btn-secondary">
        Mostrar...</a>
</form>
  </div>
</div>
</div>
@endforeach
</div>