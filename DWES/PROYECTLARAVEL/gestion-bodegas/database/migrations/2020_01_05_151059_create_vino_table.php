<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVinoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vinos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string("nombre");
            $table->string("descripcion");
            $table->integer("año");
            $table->integer("alcohol");
            $table->string("tipo");
            $table->unsignedBigInteger("id_bodega");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vinos');
    }
}
