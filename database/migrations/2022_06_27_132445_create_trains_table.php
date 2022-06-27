<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('departure_station',100);
            $table->string('arrival_station',100);
            $table->time('Orario_di_partenza');
            $table->time('Orario_di_arrivo');
            $table->smallInteger('Codice_Treno')->unsigned();
            $table->smallInteger('Numero_carrozza')->unsigned();
            $table->boolean('in_orario');

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
        Schema::dropIfExists('trains');
    }
}
