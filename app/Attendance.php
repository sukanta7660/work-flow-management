<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $table = 'attendance';
    protected $primaryKey = 'attendanceID';
    protected $fillable = [
        'employeeID','inTime','outTime', 'userID'
    ];
    public function user() {
        return $this->belongsTo('App\User','userID');
    }
}
