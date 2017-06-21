<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterRegistrationsAddIpAddress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	// already exists
//    	Schema::table('registrations', function($table){
 //   		$table->string('str_ip_address');
 //   	
 //   	});
    		 
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
 //   	Schema::table('registrations', function($table){
 //   	
  //  		$table->dropColumn('str_ip_address');
    	
     	
  //  	});
    		 
        //
    }
}
