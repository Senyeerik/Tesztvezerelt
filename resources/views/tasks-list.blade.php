@extends('layout')

@section('content')
<ul>
  @foreach($tasks as $task)
    <li>{{ $task }}</li>
  @endforeach
</ul>
<div>{{ $foo }}</div>
@endsection
