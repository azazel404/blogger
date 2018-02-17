@extends('layouts.app')

@section('content')
asda;sdkas;lda;sjdakjdlkajdlkjasd
asdkjaldadasda
da;lsd;asdkjaldadasdad;akdja;kd'asdkjaldadasdad
<hr>

{{$suggests->name}}
<a href="/suggests/{{$suggests->id}}/edit">edit</a>
<form class="" action="/suggests/{{ $suggests->id }}" method="post">
  {{ csrf_field() }}
  <input type="submit" name="submit" value="delete">
    <input type="hidden" name="_method" value="delete">
  </form>
@endsection
