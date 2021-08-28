<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablasEmpleados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql')->create('Login', function ($table) {
            $table->bigIncrements('id');
            $table->string('email');
            $table->string('bd');
            $table->string('password');
            $table->timestamps();
        });

        Schema::connection('mysql2')->create('Empleados', function ($table) {
            $table->bigIncrements('id');
            $table->string('email');
            $table->string('password');
            $table->timestamps();
        });

        Schema::connection('mysql3')->create('Empleados', function ($table) {
            $table->bigIncrements('id');
            $table->string('email');
            $table->string('password');
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
        //
    }
}
