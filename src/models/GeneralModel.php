<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GeneralModel extends Model
{
		/**
		 * This method is used for change model table name
		 * @param $table_name
		 */
		public function changeModelTableName($table_name)
		{
				$this->table = $table_name;
    }

		/**
		 * This method is used for changed for model filleables
		 * @param array $fillable
		 */
		public function changeModelFillable(array $fillable)
		{
				$this->fillable = $fillable;
    }
}
