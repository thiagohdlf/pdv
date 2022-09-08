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
        Schema::create('caixas', function (Blueprint $table) {
            $table->id();
            //$table->unsignedBigInteger('pdv_id');

            $table->enum('nome', ['Caixa 1', 'Caixa 2', 'Caixa 3', 'Caixa 4'])->unique();
            $table->decimal('valor', 8,2);

            //$table->foreign('pdv_id')->references('id')->on('pdvs')->onDelete('cascade');
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
        Schema::dropIfExists('caixas');
    }
};
