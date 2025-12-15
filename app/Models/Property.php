<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    // security k lyee fillable use kya
    protected $fillable = ['title', 'description', 'price', 'location', 'image'];
}
