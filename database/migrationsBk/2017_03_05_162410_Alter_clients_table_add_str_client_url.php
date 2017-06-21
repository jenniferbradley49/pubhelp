<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterClientsTableAddStrClientUrl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
/*
    	Schema::table(
    	'clients',
    	function (Blueprint $table)
    	{
			$table->string('str_client_url');
       	}
    	);
*/    	 
    	//
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
 /*   	Schema::table('clients', function($table){
      		$table->dropColumn('str_client_url');
       	});
  */     	
        //
    	//
    }
}
