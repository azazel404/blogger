@extends('layouts.app')

@section('content')


<form class="" action="{{route('suggests.update', $suggests->id)}}" method="post">
  {{ csrf_field() }}
  <input type="hidden" name="_method" value="put">
  <input type="text" name="name" value="{{ isset($suggests) ? $suggests->name : '' }}">
  <br>
  <input type="submit" name="submit" value="edit">
</form>
@endsection
