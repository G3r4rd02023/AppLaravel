@extends('adminlte::page')

@section('content_header')
    <h1>Editar Persona</h1>
@stop

@section('content')
    <div class="col-md-6">
        <h2>Editar Persona</h2>
        @if ($personaArray)
            <form action="{{ route('admin.update', $personaArray['COD_PERSONA']) }}" method="post">
                @csrf
                @method('put')

                <!-- Verificar si 'id' existe en el array antes de acceder a él -->
                @if (isset($personaArray['COD_PERSONA']))
                    <input type="hidden" name="id" value="{{ $personaArray['COD_PERSONA'] }}">
                @endif

                <!-- Campos del formulario -->
                <div class="form-group">
                    <label for="COD_PERSONA">COD_PERSONA</label>
                    <input type="text" name="COD_PERSONA" class="form-control" value="{{ $personaArray['COD_PERSONA'] ?? '' }}">
                </div>

                <!-- Otros campos del formulario... -->

                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        @else
            <p>Persona no encontrada.</p>
        @endif
    </div>
@endsection