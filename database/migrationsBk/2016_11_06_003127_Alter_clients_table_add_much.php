<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterClientsTableAddMuch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::table(
    	'clients',
    	function (Blueprint $table)
    	{
 //   		$table->string('str_website');
    		$table->string('str_crm')->nullable();
    		$table->string('str_crm_website')->nullable();
    		$table->string('str_lead_destination')->nullable();
    		$table->boolean('bool_confirmed')->nullable();
    		
    	}
    	);
    	
    	 
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    	Schema::table('clients', function($table){
    		$table->dropColumn('str_crm');
    		$table->dropColumn('str_crm_website');
    		$table->dropColumn('str_lead_destination');
    		$table->dropColumn('bool_confirmed');
    	});
    	//
    }
}
