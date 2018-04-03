<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStylistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stylists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('salon_id');
			$table->string('first_name');
			$table->string('second_name');
			$table->string('address1');
			$table->string('address2');
			$table->string('town');
			$table->string('postcode');
			$table->string('email');
			$table->string('phone');
			$table->string('mobile');
			$table->string('current_emp');
			$table->string('current_emp_des');
			$table->string('school_qual');
			$table->string('qual_non_hair');
			$table->string('adex_stock');
			$table->string('adex_manage');
			$table->string('adex_train');
			$table->string('adex_reception');
			$table->string('adex_marketing');
			$table->string('adex_cservice');
			$table->string('experience');
			$table->string('current_position');
			$table->string('client_base');
			$table->string('qualifications');
			$table->integer('cutting_skills');
			$table->integer('colour_knowledge');
			$table->integer('colour_skills');
			$table->integer('hair_up');
			$table->integer('men');
			$table->integer('extensions_weave');
			$table->integer('extensions_other');
			$table->integer('chem_straighten');
			$table->integer('braz_blow');
			$table->text('awards');
			$table->text('about_you');
			$table->text('why_hairdressing');
			$table->text('why_us');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('stylists');
    }
}
