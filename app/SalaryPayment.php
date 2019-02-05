<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalaryPayment extends Model
{
    protected $table = 'salary_payment';
    protected $primaryKey = 'salarypaymentID';
    protected $fillable = [
        'employeeID', 'salarysheetID','employeeName','salaryName', 'dob',
        'address','amount', 'descriptions', 'userID'
    ];
}
