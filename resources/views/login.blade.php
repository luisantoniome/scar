@extends('layouts.master')

@section('content')

    <section class="Login">
    	<div class="Login-container">
    		<form class="Login-form">
	    		<input type="text" placeholder="Nombre de usuario">
	    		<input type="password" placeholder="Contraseña">
	    		<button type="submit">
	    			<span class="fa fa-sign-in"></span> Entrar
	    		</button>
	    	</form>
    	</div>
    </section>

@stop