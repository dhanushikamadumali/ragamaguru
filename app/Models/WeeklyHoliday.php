<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeeklyHoliday extends Model
{
    use HasFactory;
    protected $table = 'weekly_holiday';

    protected $fillable = [
        'dayname',
    ];
}
