@extends('layouts.app')

@section('content')


<form class="" action="{{route('suggests.update', $suggests->id)}}" method="post">
  {{ csrf_field() }}
  <input type="text" name="title" value="{{$suggests->name }}">
  <br>
  <input type="submit" name="submit" value="edit">
    <input type="hidden" name="_method" value="put">
</form>
@endsection
