<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = ['title', 'type', 'conditions', 'start_date', 'end_date', 'status', 'banner_image'];
    protected $casts = ['conditions' => 'json', 'start_date' => 'datetime', 'end_date' => 'datetime'];
}
