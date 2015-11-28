@extends('layouts.master')

@section('content')

	@include('partials.errors')

	<form action="{{ route('order_edit_path', $order->id) }}" method="post">
		{{ csrf_field() }}

		<input type="hidden" name="_method" value="patch">

		<span class="fa fa-calendar"></span>
		<input type="date" name="date" value="{{ $order->date }}"}>

		<span class="fa fa-sort-numeric-asc"></span>
		<input type="number" name="table_number" value="{{ $order->table_number }}">

		<span class="fa fa-usd"></span>
		<input type="number" name="total" value="{{ $order->total }}">
		
		<button type="submit">
			<span class="fa fa-pencil"></span> Editar
		</button>
	</form>

@stop