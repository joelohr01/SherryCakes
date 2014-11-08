<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('projectname');
            $table->string('customername');
            $table->string('customeraddress');
            $table->string('customercity');
            $table->string('customerstate');
            $table->integer('customerzip');
            $table->string('styleofcake');
            $table->string('typeoffrosting');
            $table->string('colors');
            $table->string('typeofcake');
            $table->integer('howmanypeople');
            $table->integer('numberoftiers');
            $table->date('duedate');
            $table->date('orderdate');
            $table->string('supplies');
            $table->float('costofcake');
            $table->float('priceofcake');
            $table->string('notes');
            $table->boolean('notcompleted');
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
		Schema::drop('projects');
	}

}
