<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metas', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('total')->nullable();
            $table->integer('abonado')->default(0);
            $table->integer('faltante')->default(0);
            $table->integer('total_cuotas')->default(0);
            $table->integer('abono_cuotas')->default(0);
            $table->string('nombre', 250)->nullable();
            $table->integer('user_id')->unsigned();


            $table->foreign('user_id')
                ->references('id')->on('users');

            $table->timestamps();

        });

        Schema::create('abonos', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->dateTime('fecha')->nullable();
            $table->integer('monto')->nullable();
            $table->string('descripcion', 250)->nullable();
            $table->integer('meta_id')->unsigned();


            $table->foreign('meta_id')
                ->references('id')->on('metas');

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
        Schema::dropIfExists('abonos');
        Schema::dropIfExists('metas');
    }
}
