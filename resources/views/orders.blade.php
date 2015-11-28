@extends('layouts.master')

@section('content')

    <h2>Comandas</h2>

    <h3>Estas son nuestras comandas</h3>
    
    <div class="table-responsive">
    	<table class="table table-condensed">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Fecha</th>
                    <th>Mesa</th>
                    <th>Total</th>
                    <th>Cliente</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->date }}</td>
                        <td>{{ $order->table_number }}</td>
                        <td>{{ $order->total }}</td>
                        <td>{{ $order->client->first_name }} {{ $order->client->last_name }}</td>
                        <td><a href="{{ route('order_show_path', $order->id) }}">Ver</a></td>
                        <td><a href="{{ route('order_edit_path', $order->id) }}">Editar</a></td>
                        <td><a href="{{ route('order_delete_path', $order->id) }}" onclick="return confirm('¿Seguro que deseas eliminarla?')">Eliminar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@stop