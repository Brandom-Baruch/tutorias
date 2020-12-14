@extends('errors::layout')

@section('title', 'Error de autorización')

@section('message')

  <h1 style="color: black;">Esta acción no está autorizada</h1>
  <h3><a href="{{url('/docente')}}" style=" text-decoration:none; color: black;">Volver</a></h3>

@endsection

