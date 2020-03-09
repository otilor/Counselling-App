@extends('layouts.app')
@section('content')
<p>You are {{ Auth::user()->email }}</p>
<p>Welcome</p>
<form action = "{{ route('logout') }}" method="POST">
{{ csrf_field() }}
<div class="btn btn-danger">
<input type="submit" value="Logout" class="btn btn-danger">
</div>
</form>
@endsection