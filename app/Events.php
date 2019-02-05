<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $table = 'events';
    protected $primaryKey = 'eventID';
    protected $fillable = [
        'title','doe','toe','venue','description', 'userID'
    ];
}
