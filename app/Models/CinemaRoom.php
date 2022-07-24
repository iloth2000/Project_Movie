<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CinemaRoom extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'number_of_row',
        'number_of_col',
        'capacity',
        'status'
    ];
}
