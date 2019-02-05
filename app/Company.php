<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'company';
    protected $primaryKey = 'companyID';
    protected $fillable = [
        'name','address','city','state','post','currency','dateFormat','owner','phone','fax','mobile','website','email','companyType', 'userID'
    ];
}
