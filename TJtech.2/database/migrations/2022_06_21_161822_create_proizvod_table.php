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
        Schema::create('proizvod', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategorija_id')->constrained('kategorija');
            $table->foreignId('proizvodjac_id')->constrained('proizvodjac');
            $table->string('Model');
            $table->string('RAM');
            $table->string('CPU');
            $table->string('GPU');
            $table->string('Memorija');
            $table->decimal('Cijena', 7,2);
            $table->integer('Kolicina');
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
        Schema::dropIfExists('proizvod');
    }
};
