<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterRegistrationsTableRedesign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::table('registrations', function($table){
    		
    		$table->dropColumn('int_genre');
    		$table->dropColumn('int_schedule');
    		$table->dropColumn('bool_format_mw');
    		$table->dropColumn('bool_format_hw');
    		$table->dropColumn('bool_format_tw');
    		$table->dropColumn('bool_format_mo');
    		$table->dropColumn('int_contact_time');
    		$table->dropColumn('int_age');
    		$table->dropColumn('int_salutation_id');
    		$table->dropColumn('int_state_id');
    		$table->dropColumn('str_telephone_ac');
    		$table->dropColumn('str_telephone_two');
    		$table->dropColumn('str_telephone_three');

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

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
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

    		$table->integer('int_genre');
    		$table->integer('int_schedule');
    		$table->boolean('bool_format_mw');
    		$table->boolean('bool_format_hw');
    		$table->boolean('bool_format_tw');
    		$table->boolean('bool_format_mo');
    		$table->integer('int_contact_time');
    		$table->integer('int_age');
    		$table->integer('int_salutation_id');
    		$table->integer('int_state_id');
    		$table->string('str_telephone_ac');
    		$table->string('str_telephone_two');
    		// third section could start with a zero, so must be a string
    		$table->string('str_telephone_three');
    		
    	});
    	//
    }
}
