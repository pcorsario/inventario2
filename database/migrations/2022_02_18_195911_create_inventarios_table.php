<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventarios', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_inventario');
            $table->time('hora_inventario');
            $table->unsignedBigInteger('producto_id')->nullable();
            $table->unsignedBigInteger('condicion_id')->nullable();
            $table->unsignedBigInteger('sede_id')->nullable();
            $table->unsignedBigInteger('planta_id')->nullable();
            $table->unsignedBigInteger('departamento_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('producto_id')
                            ->references('id')
                            ->on('productos')
                            ->onDelete('set null');
            $table->foreign('condicion_id')
                            ->references('id')
                            ->on('condicions')
                            ->onDelete('set null');
            $table->integer('cantidad');
            
            $table->foreign('sede_id')
                            ->references('id')
                            ->on('sedes')
                            ->onDelete('set null');

            $table->foreign('planta_id')
                            ->references('id')
                            ->on('plantas')
                            ->onDelete('set null');
            
            $table->foreign('departamento_id')
                            ->references('id')
                            ->on('departamentos')
                            ->onDelete('set null');
            $table->foreign('user_id')
                            ->references('id')
                            ->on('users')
                            ->onDelete('set null');

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
        Schema::dropIfExists('inventarios');
    }
};