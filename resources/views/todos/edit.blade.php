@extends('layouts.app')

@section('content')
<h1>Edit Todo</h1>
    
    {!! Form::open(['action' => ['TodosController@update', $todo->id], 'method' =>'POST']) !!}
    <a class="btn btn-default" href="/todo/{{$todo->id}}">Go Back to Todos List</a>
        {{Form::bsText('text', $todo->text)}}
        {{Form::bsTextArea('body', $todo->body)}}
        {{Form::bsText('due', $todo->due)}}
        {{Form::hidden('_method', 'PUT')}}
        {{Form::bsSubmit('Update', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection