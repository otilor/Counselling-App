@extends('layouts.app')
@section('content')

<form action="{{action('TodosController@update',$todo->id)}}" method = "POST">
    <input type="hidden" name = "_method" value="PATCH" />
    {{ csrf_field() }}
<div class="well">
    <div class="form-group">
            <label for="title">Title</label>
            <input name = "text" class="form-control w-25 p-3" id="exampleFormControlTextarea1" value="{{$todo->text}}">
          </div>
    <div class="form-group">
            <label for="body">Body</label>
    <textarea name = "body" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$todo->body}}</textarea>
    </div><!--End of Body-->

    <div class="form-group">
        <label for = "due">Due:</label>
    <input type="date" name="due" value="{{$todo->due}}">
    </div><!--End of date due-->
    <div>
        <input type = "submit" class="btn btn-primary" value = "Submit Todo">
    </div>
</div>
</form>
@endsection