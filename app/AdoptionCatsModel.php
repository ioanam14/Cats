<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdoptionCatsModel extends Model
{
    protected $table = 'adoption_cats';
    public $timestamps = false;
    protected $fillable = ['id', 'name', 'race', 'description', 'photo'];
}
