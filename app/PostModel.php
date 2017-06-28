<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    protected $table = 'posts';
    public $timestamps = false;
    protected $fillable = ['id', 'title', 'content'];
}
