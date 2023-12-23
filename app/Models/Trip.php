<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $table = "trips";
    public $primaryKey = "id";
    public $timestamps = false;
    public $fillable = [
        'id',
        'from_location',
        'to_location',
        'price',
        'available_seat',
    ];
}
