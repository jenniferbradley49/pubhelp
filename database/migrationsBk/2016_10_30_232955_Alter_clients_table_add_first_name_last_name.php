<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterClientsTableAddFirstNameLastName extends Migration
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
    		$table->string('str_first_name')->nullable();
    		$table->string('str_last_name')->nullable();
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
 //   	Schema::table('clients', function($table){
 //   		$table->dropColumn('str_first_name');
 //   		$table->dropColumn('str_last_name');
 //   	});
    		 
        //
    }
}
