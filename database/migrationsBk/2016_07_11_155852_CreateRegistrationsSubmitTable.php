<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationsSubmitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
  /* replaced by registrations table  	
    	Schema::create(
    	'registration_submits',
    	function (Blueprint $table) {
    		$table->increments('id');
    		$table->integer('int_genre');
    		$table->integer('int_schedule');
    		$table->integer('int_format');
    		$table->integer('int_contact_time');
    		$table->boolean('bool_multiple_responses');
    		$table->boolean('bool_two_columns');
    		$table->string('str_name');
    		$table->string('str_text');
    		$table->timestamps();
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
//    	Schema::drop('registration_submits');
    	    		 
        //
    }
}
