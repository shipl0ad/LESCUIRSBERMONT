<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Usagers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NomUsager');
            $table->string('PrenomNom');
            $table->string('MotsDePasse');
            $table->string('Role');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Usagers');
    }
}
