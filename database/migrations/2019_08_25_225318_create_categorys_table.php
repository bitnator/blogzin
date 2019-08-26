<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategorysTable extends Migration {

	public function up()
	{
		Schema::create('categorys', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 45);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('categorys');
	}
}