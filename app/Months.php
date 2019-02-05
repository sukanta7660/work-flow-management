<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Months extends Model
{
    protected $table = 'months';
    protected $primaryKey = 'monthID';
    protected $fillable = [
        'name', 'userID'
    ];
}
