<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Records extends Model
{
    use HasFactory;

    protected $table = 'records';

    protected $fillable = [

        'patient_id',
        'records_id',
        'history',
        'findings',
        'weight',
        'height',
        'blood_pressure',
        'diagnostic_result',
        'medicine',
        'medicine_taken',
        'prescription',
        'non_prescription',
        'patient_progress',
        'total_payment',
    ];
}
