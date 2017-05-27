<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ViewsFieldMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
				Schema::create('views_field', function (Blueprint $table) {
						$table->increments('id');
						$table->integer('field_id');
						$table->integer('view_id');
				});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('views_field');
    }
}
