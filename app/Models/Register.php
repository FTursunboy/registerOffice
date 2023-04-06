<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'manager', 'zam-director', 'otdel_id', 'phone', 'sec_phone', 'email', 'index', 'region', 'village', 'street', 'street_number', 'status'];
}
