<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterSurveyQuestionsAddFirstAddLastAddNextAddBack extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::table('survey_questions', function($table){
    		$table->boolean('bool_first')->after('bool_two_columns');
    		$table->boolean('bool_last')->after('bool_first');
    		$table->string('str_next', 50)->after('str_text')->nullable();
    		$table->string('str_prev', 50)->after('str_next')->nullable();
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::table('survey_questions', function($table){
    		$table->dropColumn('bool_first');
    		$table->dropColumn('bool_last');
    		$table->dropColumn('str_next');
    		$table->dropColumn('str_prev');
    		
    	});
    }
}
