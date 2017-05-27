<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    protected $table = "fields";
    public $fillable = ['id','model_id','field_name','field_type'];
    public $timestamps = false;
}
