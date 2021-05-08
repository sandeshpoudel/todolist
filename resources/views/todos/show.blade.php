@extends('layouts.app')
@section('content')

<h2>Showing</h2>
<a href="/" class="btn btn-default">Go back</a>
<h1><a href="/todo/{{$todo->id}}">{{$todo->text}}</a></h1>
<div class= "label label-danger">{{$todo->due}}</div>
<hr>
<p>{{$todo->body}}</p>


@endsection