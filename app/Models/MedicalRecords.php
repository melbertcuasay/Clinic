<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MedicalRecords extends Model
{
    use HasFactory;

    protected $table = 'medical_records';

    protected $fillable = [

        'patient_id',
        'patient_history',
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
