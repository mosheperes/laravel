<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    // table name
    protected $table='posts';
    //primary key  change
    public $primayKey = 'id';

    public $timestamps = true;
}
