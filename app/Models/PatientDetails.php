<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientDetails extends Model
{
    use HasFactory;

    protected $table = 'patient_details';

    protected $fillable = [

        'case_no',
        'last_name',
        'middle_initial',
        'first_name',
        'address',
        'age',
        'birthday',
        'birth_place',
        'civil_status',
        'gender',
        'phone',
        'religion',
        'occupation',
    ];
}
