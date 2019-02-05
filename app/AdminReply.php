<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminReply extends Model
{
    protected $table = 'admin_replies';
    protected $primaryKey = 'adminrplyID';
    protected $fillable = [
        'employeeID','message', 'userID'
    ];
    public function user() {
        return $this->belongsTo('App\User','userID');
    }
}
