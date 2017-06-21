<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterRegistrationsTableSimplify extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::table('registrations', function($table){
    		$table->dropColumn('str_genre');
    		$table->dropColumn('str_schedule');
    		$table->dropColumn('str_formats');
    		$table->dropColumn('str_contact_time');
    		$table->dropColumn('str_age');
    		$table->dropColumn('str_salutation');
    		$table->dropColumn('str_state');
    		$table->dropColumn('str_telephone');

    		$table->integer('int_survey_project_id')->unsigned();
    		$table->integer('int_public_id');
       		$table->string('str_col_name');
	   		$table->string('str_value');
    	
    	});

    		Schema::table(
    		'registrations',
    		function (Blueprint $table)
    		{
    			$table->foreign('survey_project_id')->references('id')->on('survey_projects')->onDelete('cascade');
    		}
    		);
    		 
    		
    		Schema::table(
    		'registrations',
    		function (Blueprint $table)
    		{
    			$table->index('survey_project_id');
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

    	Schema::table('registrations', function($table){
    		
    		$table->dropColumn('int_project_id');
    		$table->dropColumn('int_public_id');
    		$table->dropColumn('str_col_name');
    		$table->dropColumn('str_value');
    
    		$table->string('str_genre')->after('id');
    		$table->string('str_schedule');
    		$table->string('str_formats');
    		$table->string('str_contact_time');
    		$table->string('str_age');
    		$table->string('str_salutation');
    		$table->string('str_state');
    		$table->string('str_telephone');
    		
    	});
    	    	//
    }
}
