@extends("Plantilla.index")
@section('formulario')
    <form>
        <div class="form-group">
            <label for="formGroupExampleInput">Example label</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Another label</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                Registrar
            </button>
        </div>
    </form> 
@endsection