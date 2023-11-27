@extends('adminlte::page')

@section('title', 'Personas')

@section('content_header')
    <h1>Lista de Personas</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <div class="col-md-12 mt-3">
        <a href="{{ route('admin.create') }}" class="btn btn-primary">Crear Nuevo Registro</a>
    </div>
    <div class="col-md-12">
    <table class="table mt-2 mb-4">
        <thead>
            <tr>
                
                <th>IDENTIDAD</th>
                <th>NOM_PERSONA</th>
                <th>APE_PERSONA</th>
                <th>GEN_PERSONA</th>
                <th>IND_CIVIL</th>
                <th>EDA_PERSONA</th>
                
                <th>USR_REGISTRO</th>
                <th>FEC_REGISTRO</th>
            </tr>
        </thead>
        <tbody>
            @foreach($personasArray as $persona)
                <tr>
                    
                    <td>{{$persona['IDENTIDAD']}}</td>
                    <td>{{$persona['NOM_PERSONA']}}</td>
                    <td>{{$persona['APE_PERSONA']}}</td>
                    <td>{{$persona['GEN_PERSONA']}}</td>
                    <td>{{$persona['IND_CIVIL']}}</td>
                    <td>{{$persona['EDA_PERSONA']}}</td>
                   
                    <td>{{$persona['USR_REGISTRO']}}</td>
                    <td>{{$persona['FEC_REGISTRO']}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop