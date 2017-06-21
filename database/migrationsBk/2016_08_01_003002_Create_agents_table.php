<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
/*    	Schema::create(
    	'agents',
    	function (Blueprint $table) {
    		$table->increments('id');
    		$table->integer('user_id');
    		$table->string('str_company_name');
    		$table->string('str_website')->nullable();
//    		$table->string('str_email')->nullable();
    		$table->string('str_email_two')->nullable();
    		$table->string('str_telephone_one')->nullable();
    		$table->string('str_telephone_two')->nullable();
    		$table->string('str_city')->nullable();
    		$table->integer('int_state_id')->nullable();
    		$table->string('str_zip')->nullable();
    		
    		$table->timestamps();
    	}
    	);
    	

    	Schema::table(
    	'agents',
    	function (Blueprint $table)
    	{
    		$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
 //   	Schema::drop('agents');
    	 
        //
    }
}
