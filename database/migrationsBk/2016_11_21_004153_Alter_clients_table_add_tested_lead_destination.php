<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterClientsTableAddTestedLeadDestination extends Migration
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
    		$table->string('str_lead_destination_tested')->nullable();
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
    		$table->dropColumn('str_lead_destination_tested');
    	});
    		 
        //
    }
}
