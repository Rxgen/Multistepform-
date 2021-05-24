<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    
    protected $table='profiles';

    protected $fillable = [
        'name',
        'description',
        'pappointment',
        'price',
        'hours',
        'intervals',
        'mtype',
        'Nparticipants',
        'Nmeeting',
        'Nperiod',
        'Adays'
    ];
    use HasFactory;
}
