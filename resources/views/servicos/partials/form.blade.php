<div class="col-sm-6">
	
	<div class="form-group">
		{!! Form::text('descricao', null, ['class' => 'form-control floating-label', 'placeholder' => 'Descrição:']) !!}
	</div>

	<div class="form-group">
		{!! Form::select('tipo_lancamento',
			['A' => 'Automático', 'M' => 'Manual'], null,
			['class' => 'form-control floating-label', 'placeholder' => 'Tipo de Lançamento:']) !!}
	</div>

	<div class="form-group">
		{!! Form::select('grupo_lancamento',
			['1' => 'Mensalidades', '2' => 'Serviços Médicos'], null,
			['class' => 'form-control floating-label', 'placeholder' => 'Grupo de Lançamento:']) !!}
	</div>

</div> {{-- /.col-sm-6 --}}

<div class="col-sm-6">

	<div class="form-group">
		{!! Form::text('codigo_contabil', null, ['class' => 'form-control floating-label', 'placeholder' => 'Código Contábil:']) !!}
	</div>
 
	<div class="form-group">
		{!! Form::text('valor', null, ['class' => 'form-control floating-label', 'placeholder' => 'Valor R$:']) !!}
	</div>

	<div class="form-group">
		{!! Form::checkbox('lista_caixa', 'value', ['class' => 'form-control floating-label', 'placeholder' => 'Listar no Caixa?']) !!}
	</div>

</div> {{-- /.col-sm-6 --}}