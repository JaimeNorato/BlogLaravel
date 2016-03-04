@extends('admin.template.main')

@section('title','Agregar tag')

@section('content')
    {!! Form::Open(['route'=>'admin.tags.store','method'=>'POST']) !!}
    <div class="form-group">
        {!! Form::label('name','Nombre') !!}
        {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre del tag','reqired']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Registar',['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::Close() !!}
@endsection