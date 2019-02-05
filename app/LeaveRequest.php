<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeaveRequest extends Model
{
    protected $table = 'leave_requests';
    protected $primaryKey = 'leaverequestID';
    protected $fillable = [
        'employeeID','name','subject','status','description','sincerely', 'userID'
    ];
    public function user() {
        return $this->belongsTo('App\User','userID');
    }
}
