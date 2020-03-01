@extends('layouts.app')

@section('content')
<h1>Create Todo</h1>
<form method = "post" action = "{{ route('store_todo') }}"  enctype="multipart/form-data">
    
    {{ csrf_field() }}
    <div class="well">
        
        Todo title:<input type="text" name = "text" class="bsText">
        <hr>
    </div>
    <div>
        Body: <textarea name = "body"></textarea>
    </div>
    <div class="well">
        
            Due: <input type="text" name = "due" class="bsText">
            
        </div>

    <div>
        <input type = "submit" class="btn btn-primary">
    </div>
</form>

@endsection