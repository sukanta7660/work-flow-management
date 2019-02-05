<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobCircular extends Model
{
    protected $table = 'job_circular';
    protected $primaryKey = 'circularID';
    protected $fillable = [
        'jobTitle', 'vacancy', 'jobResponsibilities', 'employmentStatus', 'edu_Requirements',
        'exp_Requirements', 'addi_Requirements', 'jobLocation', 'salary','other_Benefits','deadline',
        'imageName', 'userID'
    ];
    public function user() {
        return $this->belongsTo('App\User','userID');
    }
}
