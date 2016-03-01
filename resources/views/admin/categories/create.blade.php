@extends('admin.template.main')

@section('title','Agregar categoria')

@section('content')
    {!! Form::Open(['route'=>'admin.categories.store','method'=>'POST']) !!}
        <div class="form-group">
            {!! Form::label('name','Nombre') !!}
            {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre de la categoria','reqired']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Registar',['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::Close() !!}
@endsection