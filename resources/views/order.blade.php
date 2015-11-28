@extends('layouts.master')

@section('content')

	<a href="{{ route('orders_path') }}">Regresar</a>

    <h2>Comanda # {{ $order->id }}</h2>

    <p>Fecha: {{ $order->date }}</p>

@stop