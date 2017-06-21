<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterSurveyItemsTableAddReadableText extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	// commented out this whole migration, as the text already exists, in str_text
//    	Schema::table('survey_items', function($table){
//    		$table->string('str_readable', 50)->nullable();
//    	});
    		 
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//    	Schema::table('survey_items', function($table){
//    		$table->dropColumn('str_readable');
//    	});
    	
        //
    }
}
