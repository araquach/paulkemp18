<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApprenticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apprentices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('salon_id');
			$table->string('first_name');
			$table->string('second_name');
			$table->integer('age');
			$table->string('address1');
			$table->string('address2');
			$table->string('town');
			$table->string('postcode');
			$table->string('email');
			$table->string('phone');
			$table->string('mobile');
			$table->string('current_emp');
			$table->string('in_salon');
			$table->string('salon_name');
			$table->integer('qualification_school');
			$table->integer('qualification_hair');
			$table->integer('cutting');
			$table->integer('styling');
			$table->integer('colouring');
			$table->integer('men');
			$table->integer('extensions');
			$table->integer('chem_straightening');
			$table->integer('brazil_blow');
			$table->integer('hair_up');
			$table->text('about');
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
        Schema::drop('apprentices');
    }
}
