<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $table = "locations";
    public $primaryKey = "id";
    public $timestamps = false;
    public $fillable = [
        'id',
        'name',
    ];
}
