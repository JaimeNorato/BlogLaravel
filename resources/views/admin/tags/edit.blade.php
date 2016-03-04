@extends('admin.template.main')

@section('title','Editar tag '.$tag->name)

@section('content')
    {!! Form::Open(['route'=>['admin.tags.update',$tag],'method'=>'PUT']) !!}
    <div class="form-group">
        {!! Form::label('name','Nombre') !!}
        {!! Form::text('name',$tag->name,['class'=>'form-control','placeholder'=>'Nombre del tag','reqired']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Guardar Cambios',['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::Close() !!}
@endsection