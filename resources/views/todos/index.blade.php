@extends('layouts.app')
@section('content')
<h1>Todos</h1>
@if(count($todos) > 0)
    @foreach ($todos as $todo)
        <div class="well">
        <h3><a href="/todo/{{$todo->id}}">{{ $todo-> text}} </a><span class="label label-danger">{{$todo->due}}</span></h3>        
        </div>
    @endforeach



@else
<h3>There are no todos.<a href="/todo/create"><button>Create one</button></a></h3>

@endif
@endsection