<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterClientsTableNullifyStrCompany extends Migration
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
    		$table->dropColumn('str_company');
 //   		$table->string('str_company')->nullable();    	
    	}
    	);
    	Schema::table(
    	'clients',
    	function (Blueprint $table)
    	{
//    		$table->dropColumn('str_company');
    		$table->string('str_company')->nullable();
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
   		Schema::table(
    		'clients',
    		function (Blueprint $table)
    		{
    			$table->dropColumn('str_company');
 //   			$table->string('str_company');
    		}
    	);
   		Schema::table(
   		'clients',
   		function (Blueprint $table)
   		{
 //  			$table->dropColumn('str_company');
   			$table->string('str_company')->nullable();
   		}
   		);
   		 
        //
    }
}
