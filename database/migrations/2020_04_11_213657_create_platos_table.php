<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('platos', function (Blueprint $table) {
            $table->id();
            $table->string('frase');
            $table->string('descrip_corta');
            $table->string('nombre_plato');
            $table->text('descrip_histo');
            $table->integer('precio');
            $table->string('clasif');
            $table->timestamps();
            //para lograr cambios es necesatio elimiar o ejecutar rollback pero se pierden los datos, si no quiero puedo hacer make:migrate add_nombre campo_to_nombre table_table
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('platos');
    }
}
