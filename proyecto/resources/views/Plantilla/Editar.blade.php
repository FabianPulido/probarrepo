@extends("Plantilla.index")
@section('editar')
<form action="{{ url('/Plantilla/'.$item->id) }}" method="POST">

{{ csrf_field() }} 

{{ method_field('PATCH') }}

        <div class="form-group">
            <label for="formGroupExampleInput">Nombre</label>
            <input type="text" class="form-control" id="Nombre" name="Nombre" value="{{$item->Nombre}}"   required>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Cedula</label>
            <input type="text" class="form-control" id="Cedula" name="Cedula" value="{{$item->Cedula}}"  required>
        </div>
        <div class="form-group">
            <button type="submit" onclick="return confirm('Datos registrados!');" class="btn btn-primary">
                Actualizar
            </button>
        </div>
    </form>

@endsection