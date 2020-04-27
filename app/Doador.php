<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doador extends Model
{
    protected $table = 'doadors';
    public $primaryKey = 'id';

    public $timestamps = true;
}
