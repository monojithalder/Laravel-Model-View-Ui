<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainModel extends Model
{
    protected $table = 'main_model';
    public $fillable = ['id','model_name','status'];
    public $timestamps = false;
}
