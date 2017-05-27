<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FieldMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
				Schema::create('fields', function (Blueprint $table) {
						$table->increments('id');
						$table->integer('model_id');
						$table->string('field_name');
						$table->string('field_type');
				});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
				Schema::drop('fields');

		}
}
