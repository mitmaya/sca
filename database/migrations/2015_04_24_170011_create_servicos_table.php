<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('servicos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('descricao',50);
			$table->enum('tipo_lancamento',['Automático','Manual']);
			$table->enum('grupo_lancamento',['Mensalidades','Medicos']);
			$table->string('codigo_contabil',10);
			$table->decimal('valor',10,2);
			$table->boolean('lista_caixa');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('servicos');
	}

}
