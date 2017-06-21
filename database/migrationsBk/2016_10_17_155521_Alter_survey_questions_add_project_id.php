<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterSurveyQuestionsAddProjectId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::table('survey_questions', function($table){
    		$table->integer('survey_project_id')->unsigned();
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
    	    	Schema::table('survey_questions', function($table){
    	    		$table->dropColumn('survey_project_id');
    	    	});
    	   
        //
    }
}
