<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterClientsTableAddProjectId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::table('clients', function($table){

    		$table->integer('survey_project_id');
    	
    	});
/*
    	Schema::table(
    		'clients',
    		function (Blueprint $table)
    		{
    			$table->foreign('survey_project_id')->references('id')->on('survey_projects')->onDelete('cascade');
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
/*
    	Schema::table(
    	'clients',
    	function (Blueprint $table)
    	{
    		$table->dropForeign('clients_survey_project_id_foreign');
    		//   		$table->dropIndex('registration_data_registration_id_index');
    	}
    	);
 */   	 
    	$table->dropColumn('survey_project_id');
    	//
    }
}
