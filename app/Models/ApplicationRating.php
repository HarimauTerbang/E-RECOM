<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationRating extends Model
{
    use HasFactory;

    protected $table = 'application_ratings';

    protected $fillable = [
        'business_type',
        'application_name',
        'rating',
        'description',
    ];
}
