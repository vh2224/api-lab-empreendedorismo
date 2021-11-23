<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtividadesComplentaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atividades_complementares', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->string('empresa');
            $table->string('cnpj');
            $table->integer('carga_horaria_informacao');
            $table->integer('carga_horaria_integraliza');
            $table->string('justificativa');
            $table->string('certificado');
            $table->string('status');
            $table->integer('is_active');
            $table->unsignedBigInteger('curso_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('categoria_id')->nullable();
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
        Schema::dropIfExists('atividades_complementares');
    }
}
