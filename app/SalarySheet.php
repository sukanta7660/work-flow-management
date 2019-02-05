<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalarySheet extends Model
{
    protected $table = 'salary_sheet';
    protected  $primaryKey = 'salarysheetID';
    protected $fillable = [
        'employeeID', 'name','employeeName','description', 'address', 'nid', 'dob','amount','userID'
    ];
    public function employee() {
        return $this->belongsTo('App\Employee','employeeID');
    }
    public function user() {
        return $this->belongsTo('App\User','userID');
    }
}
