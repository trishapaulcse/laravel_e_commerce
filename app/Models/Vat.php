<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vat extends Model
{
    protected $fillable = ['name', 'type', 'value', 'applies_to', 'priority', 'status'];
}
