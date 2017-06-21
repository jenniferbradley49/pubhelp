<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterRegistrationsTableDropColNameDropValue extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::table('registrations', function($table){   	
    		$table->dropColumn('str_col_name');
    		$table->dropColumn('str_value');    	
    	});
    		 
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::table('registrations', function($table){    	
    		$table->string('str_col_name');
    		$table->string('str_value');   		 
    	});
    	
        //
    }
}
