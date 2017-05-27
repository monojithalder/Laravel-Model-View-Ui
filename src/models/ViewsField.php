<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewsField extends Model
{
    protected $table = 'views_field';
    public $fillable = ['id','view_id','field_id'];
    public $timestamps = false;
}
