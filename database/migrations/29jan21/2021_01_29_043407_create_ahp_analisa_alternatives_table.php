<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAhpAnalisaAlternativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ahp_analisa_alternatives', function (Blueprint $table) {
            $table->id();
            $table->integer('C1');
            $table->integer('C2');
            $table->integer('C3');
            $table->float('C4');
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
        Schema::dropIfExists('ahp_analisa_alternatives');
    }
}
