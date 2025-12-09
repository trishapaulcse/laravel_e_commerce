<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $fillable = ['name', 'type', 'value', 'applies_to', 'start_date', 'end_date', 'status'];
    protected $casts = ['start_date' => 'datetime', 'end_date' => 'datetime'];
}
