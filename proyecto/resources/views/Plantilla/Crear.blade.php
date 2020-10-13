@extends("Plantilla.index")
@section('formulario')
    <form>
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

    @if ( session('mensaje') )
        <div class="alert alert-success">{{ session('mensaje') }}</div>
    @endif

@endsection