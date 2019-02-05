<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    protected $table = 'contact_message';
    protected $primaryKey = 'contactID';
    protected $fillable = [
        'employeeID','name','email','subject','message', 'userID'
    ];
    public function user() {
        return $this->belongsTo('App\User','userID');
    }
}
