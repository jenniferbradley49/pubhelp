<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterClientsTableAddClientVars extends Migration
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
    	// included the postfix _lead to differential from the var name 
    	// in the same client table referring to the client 	
    		$table->string('str_first_name_lead')->default('first_name');
    		$table->string('str_last_name_lead')->default('last_name');
    		$table->string('str_email_lead')->default('email');
    		$table->string('str_address_one_lead')->default('address_one');
    		$table->string('str_address_two_lead')->default('address_two');
    		$table->string('str_city_lead')->default('city');
    		$table->string('str_zip_lead')->default('zip');
    		$table->string('str_genre_lead')->default('genre');
    		$table->string('str_schedule_lead')->default('schedule');
    		$table->string('str_contact_time_lead')->default('contact_time');
    		$table->string('str_age_lead')->default('age');
    		$table->string('str_formats_lead')->default('formats');
    		$table->string('str_salutation_lead')->default('salutation');
    		$table->string('str_state_lead')->default('state');
    		$table->string('str_telephone_lead')->default('telephone');
    		    		    		
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
    	Schema::table('clients', function($table){
    		$table->dropColumn('str_first_name_lead');
    		$table->dropColumn('str_last_name_lead');
    		$table->dropColumn('str_email_lead');
    		$table->dropColumn('str_address_one_lead');
    		$table->dropColumn('str_address_two_lead');
    		$table->dropColumn('str_city_lead');
    		$table->dropColumn('str_zip_lead');
    		$table->dropColumn('str_genre_lead');
    		$table->dropColumn('str_schedule_lead');
    		$table->dropColumn('str_contact_time_lead');
    		$table->dropColumn('str_age_lead');
    		$table->dropColumn('str_formats_lead');
    		$table->dropColumn('str_salutation_lead');
    		$table->dropColumn('str_state_lead');
    		$table->dropColumn('str_telephone_lead');
    		
    	});
        //
    }
}
