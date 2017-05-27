<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Views extends Model
{
    protected $table = "views";
    public $fillable = ['id','view_name','model_id','status'];
		public $timestamps = false;
}
