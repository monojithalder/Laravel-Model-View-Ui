<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ViewsMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
				Schema::create('views', function (Blueprint $table) {
						$table->increments('id');
						$table->string('view_name');
						$table->integer('model_id');
						$table->enum('status', ['Active','Inactive']);
				});

		}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('views');
    }
}
