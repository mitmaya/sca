@extends('app')

@section('content')

	<h1>Registrar Serviços</h1>

	{!! Form::open(['route' => 'servicos.store']) !!}

		@include('servicos.partials.form')

		<div class="form-group">

			{!! Form::button('Salvar', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}	
		</div>

	{!! Form::close() !!}

@endsection
