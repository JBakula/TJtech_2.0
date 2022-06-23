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
        Schema::table('proizvod', function (Blueprint $table) {
            $table->string('RAM')->nullable()->change();
            $table->string('CPU')->nullable()->change();
            $table->string('GPU')->nullable()->change();
            $table->string('Memorija')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('proizvod', function (Blueprint $table) {
            //
        });
    }
};
