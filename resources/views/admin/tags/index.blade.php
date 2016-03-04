@extends('admin.template.main')

@section('title','Listado de Tags')

@section('content')
    <a href="{{ route('admin.tags.create') }}" class="btn btn-info">Registrar un nuevo tag</a><br><br>
    <table class="table table-striped">
        <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Acción</th>
        </thead>
        <tbody>
        @foreach($tag as $tags)
            <tr>
                <td>{{ $tags->id }}</td>
                <td>{{ $tags->name }}</td>
                <td><a href="{{ route('admin.tags.edit',$tags->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
                    <a href="{{ route('admin.tags.destroy',$tags->id) }}" onclick="return confirm('¿Desea eliminar el tag {{ $tags->name }} ?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $tag->render() !!}
@endsection()