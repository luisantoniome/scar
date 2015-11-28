@extends('layouts.master')

@section('content')

	@include('partials.errors')

	<form action="{{ route('order_create_path') }}" method="post">
		{{ csrf_field() }}
		<span class="fa fa-calendar"></span>
		<input type="date" name="date" value="{{ old('date') }}"}>

		<span class="fa fa-sort-numeric-asc"></span>
		<input type="number" name="table_number" value="{{ old('table_number') }}">

		<span class="fa fa-usd"></span>
		<input type="number" name="total" value="{{ old('total') }}">
		
		<button type="submit">
			<span class="fa fa-plus-circle"></span> Crear
		</button>
	</form>

@stop