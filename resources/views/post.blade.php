@extends('pastel-layout')

@section('content')
  <p>{{ $post }}</p>
  <p>length: {{ $length }} character(s)</p>
@endsection

@section('title')
Első blogbejegyzés
@endsection
