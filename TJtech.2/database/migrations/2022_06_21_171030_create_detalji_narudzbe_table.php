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
        Schema::create('detalji_narudzbe', function (Blueprint $table) {
            $table->id();
            $table->foreignId('narudzba_id')->constrained('narudzba');
            $table->foreignId('proizvod_id')->constrained('proizvod');
            $table->integer('kolicina');
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
        Schema::dropIfExists('detalji_narudzbe');
    }
};
