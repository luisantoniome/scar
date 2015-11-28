@extends('layouts.master')

@section('content')

    <h2>Home</h2>

    <a href="{{ route('order_create_path') }}">Nueva comanda</a>

    <a href="{{ route('orders_path') }}">Comandas</a>

@stop