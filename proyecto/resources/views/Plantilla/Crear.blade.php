@extends("Plantilla.index")
@section('formulario')
<form action="{{ url('/Plantilla') }}" method="POST">
{{ csrf_field() }}
        <div class="form-group">
            <label for="formGroupExampleInput">Nombre</label>
            <input type="text" class="form-control" id="Nombre" name="Nombre"  placeholder="Nombre Usuario" required>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Cedula</label>
            <input type="text" class="form-control" id="Cedula" name="Cedula" placeholder="Cedula usuario" required>
        </div>
        <div class="form-group">
            <button type="submit" onclick="return confirm('Datos registrados!');" class="btn btn-primary">
                Registrar
            </button>
        </div>
    </form>

@endsection