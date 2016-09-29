<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoTable extends Migration
{
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imagen');
            $table->string('descripcion');
            $table->string('peso');
            $table->decimal('precio', 5,2);
            $table->string('cantidad');
            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('productos');
    }
}
