@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
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
                <th>COD_PERSONA</th>
                <th>IDENTIDAD</th>
                <th>NOM_PERSONA</th>
                <th>APE_PERSONA</th>
                <th>GEN_PERSONA</th>
                <th>IND_CIVIL</th>
                <th>EDA_PERSONA</th>
                
                <th>USR_REGISTRO</th>
                <th>FEC_REGISTRO</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($personasArray as $persona)
                <tr>
                    <td>{{$persona['COD_PERSONA']}}</td>
                    <td>{{$persona['IDENTIDAD']}}</td>
                    <td>{{$persona['NOM_PERSONA']}}</td>
                    <td>{{$persona['APE_PERSONA']}}</td>
                    <td>{{$persona['GEN_PERSONA']}}</td>
                    <td>{{$persona['IND_CIVIL']}}</td>
                    <td>{{$persona['EDA_PERSONA']}}</td>
                   
                    <td>{{$persona['USR_REGISTRO']}}</td>
                    <td>{{$persona['FEC_REGISTRO']}}</td>
                    <td> <a href="{{ route('admin.edit', $persona['COD_PERSONA']) }}" class="btn btn-primary">Editar</a>

                    <form action="{{ route('admin.destroy', $persona['COD_PERSONA']) }}" method="post" style="display: inline-block;">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este registro?')">Eliminar</button>
                    </form>
                    </td>

                   
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