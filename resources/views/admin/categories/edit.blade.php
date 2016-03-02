@extends('admin.template.main')

@section('title','Editar categoria '.$category->name)

@section('content')
    {!! Form::Open(['route'=>['admin.categories.update',$category],'method'=>'PUT']) !!}
    <div class="form-group">
        {!! Form::label('name','Nombre') !!}
        {!! Form::text('name',$category->name,['class'=>'form-control','placeholder'=>'Nombre de la categoria','reqired']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Guardar Cambios',['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::Close() !!}
@endsection