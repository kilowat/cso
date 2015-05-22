<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::create('categories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string("slug")->unique()->index();
			$table->string("name");
			$table->integer("active");
			$table->timestamps();
			Kalnoy\Nestedset\NestedSet::columns($table);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('categories');
	}

}