<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appliance extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'voltage',
        'brand',
        'status',
        'reference',
        'line',
        'color',
        'product_weight',
    ];
}
