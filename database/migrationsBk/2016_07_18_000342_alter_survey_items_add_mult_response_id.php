<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterSurveyItemsAddMultResponseId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::table('survey_items', function($table){
   		$table->string('str_mult_resps_id', 20)->nullable();
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
    	Schema::table('survey_items', function($table){
    		$table->dropColumn('str_mult_resps_id');    	
    	});
    		 
        //
    }
}
