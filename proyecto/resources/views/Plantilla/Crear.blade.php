@extends("Plantilla.index")
@section('formulario')
<form action="{{route('paginados')}}" method="POST">
@csrf
        <div class="form-group">
            <label for="formGroupExampleInput">Nombre</label>
            <input type="text" class="form-control" name="Nombre" placeholder="Nombre Usuario">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Cedula</label>
            <input type="text" class="form-control" name="Cedula" placeholder="Cedula usuario">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                Registrar
            </button>
        </div>
    </form>

@endsection