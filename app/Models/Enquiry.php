<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory;
    protected $fillable = [
        'vehicle',
        'start_date',
        'end_date',
        'contact_number',
        'customer_name',
        'location'
    ];
}
