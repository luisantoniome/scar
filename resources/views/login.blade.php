@extends('layouts.master')

@section('content')

    <section class="Login">
    	<div class="Login-container">

    		@include('partials.errors')

    		<form action="{{ route('auth_store_path') }}" method="post" class="Login-form">
    			
    			{{ csrf_field() }}
	    		<input type="text" name="username" value="" placeholder="Nombre de usuario">
	    		<input type="password" name="password" placeholder="Contraseña">
	    		<button type="submit">
	    			<span class="fa fa-sign-in"></span> Entrar
	    		</button>
	    	</form>

    	</div>
    </section>

@stop