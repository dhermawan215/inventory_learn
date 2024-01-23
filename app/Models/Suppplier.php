<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suppplier extends Model
{
    use HasFactory;

    // protected $guarded = [];

    protected $table = 'suppliers';

    protected $fillable = [
        'supplier_name',
        'mobile_number',
        'email',
        'address',
        'status',
        'created_by',
        'updated_by'
    ];
}
