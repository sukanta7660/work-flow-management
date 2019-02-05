<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employee';
    protected $primaryKey = 'employeeID';
    protected $fillable = [
        'position','salary','father','mother','mobile', 'dob' , 'gender', 'address','city','postCode','country','nid','userID','imageName','account','userID'
    ];
    public function user() {
        return $this->belongsTo('App\User','userID');
    }
}
