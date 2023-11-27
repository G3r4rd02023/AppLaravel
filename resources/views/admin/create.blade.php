@extends('adminlte::page')


@section('content_header')
    <h1>Crear Persona</h1>
@stop

@section('content')
    <div class="col-md-6">
        <form action="{{ route('admin.store') }}" method="post">
            @csrf

            <!-- Campos del formulario -->
           
            <div class="form-group">
                <label for="IDENTIDAD">IDENTIDAD</label>
                <input type="text" name="IDENTIDAD" class="form-control">
            </div>
            <div class="form-group">
                <label for="NOM_PERSONA">NOM_PERSONA</label>
                <input type="text" name="NOM_PERSONA" class="form-control">
            </div>
            <div class="form-group">
                <label for="APE_PERSONA">APE_PERSONA</label>
                <input type="text" name="APE_PERSONA" class="form-control">
            </div>
            <div class="form-group">
                <label for="GEN_PERSONA">GEN_PERSONA</label>
                <input type="text" name="GEN_PERSONA" class="form-control">
            </div>
            <div class="form-group">
                <label for="IND_CIVIL">IND_CIVIL</label>
                <input type="text" name="IND_CIVIL" class="form-control">
            </div>
            <div class="form-group">
                <label for="EDA_PERSONA">EDA_PERSONA</label>
                <input type="text" name="EDA_PERSONA" class="form-control">
            </div>
            <div class="form-group">
                <label for="IND_PERSONA">IND_PERSONA</label>
                <input type="text" name="IND_PERSONA" class="form-control">
            </div>
            <div class="form-group">
                <label for="USR_REGISTRO">USR_REGISTRO</label>
                <input type="text" name="USR_REGISTRO" class="form-control">
            </div>
            <!-- Otros campos... -->

            <button type="submit" class="btn btn-primary">Crear Registro</button>
        </form>
    </div>
@endsection