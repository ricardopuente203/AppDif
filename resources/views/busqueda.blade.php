@include('layouts.app')
@section('title','Trainers')
@section('content')
     
@csrf
    <p>Listado de Trainers</p>
    <div class="row">
    @foreach ($beneficiarios as $beneficiario)
    <div class="col-sm">
 
    <h5 class="card-title">{{$beneficiario->NombreCompleto}}</h5>
    <h5 class="card-title">{{$beneficiario->FechaNacimiento}}</h5>
    <h5 class="card-title">{{$beneficiario->Domicilio}}</h5>
    <h5 class="card-title">{{$beneficiario->ProgramaBeneficiado}}</h5>
    <h5 class="card-title">{{$beneficiario->NumeroTelefono}}</h5>
    <h5 class="card-title">{{$beneficiario->FechaAceptacion}}</h5>
    <h5 class="card-title">{{$beneficiario->Curp}}</h5>

 
    
</form>
  </div>
</div>
</div>
@endforeach
</div>