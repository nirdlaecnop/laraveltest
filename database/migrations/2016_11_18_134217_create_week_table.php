<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create('week',function(Blueprint $table){
			$table->increments('id');
			$table->integer('ingredientid');
			$table->string('mon');
			$table->string('tue');
			$table->string('wed');
			$table->string('thu');
			$table->string('fri');
			$table->string('sat');
			$table->string('sun');
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
        //
		Scheme::drop('week');
    }
}
