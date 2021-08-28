<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        #$empleados = Schema::conecction('mysql2')->select('select * from empleados');
        
        #Schema::table($empleados, function (Blueprint $table) {
            #$table->engine = 'mysql2';
            #$table->unsignedBigInteger('user_id');

            #$table->foreign('user_id')->references('id')->on('Login');
       # });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       # Schema::table('empleados', function (Blueprint $table) {
            //
        #});
    }
}
