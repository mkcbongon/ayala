<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'midlename',
        'lastname',
        'email',
        'birth',
        'image',
        'property',
        'category',
        'type',
        'location',
        'price',
        'description',
        'status'
    ];
}
