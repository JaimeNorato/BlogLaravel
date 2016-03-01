@extends('admin.template.main')

@section('title','Listado de Categorias')

@section('content')
    <a href="{{ route('admin.categories.create') }}" class="btn btn-info">Registrar nueva categoria</a><br><br>
    <table class="table table-striped">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Acción</th>
        </thead>
        <tbody>
        @foreach($category as $categ)
            <tr>
                <td>{{ $categ->id }}</td>
                <td>{{ $categ->name }}</td>
                <td><a href="{{ route('admin.categories.edit',$categ->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
                    <a href="{{ route('admin.categories.destroy',$categ->id) }}" onclick="return confirm('¿Desea eliminar la categoria {{ $categ->name }} ?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $category->render() !!}
@endsection()