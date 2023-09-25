<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriptions extends Model
{
    use HasFactory;
    protected $table = 'login_otps';
    protected $fillable = [
        'email',
        'request_submit_count',
        'last_submited_at',
    ];
}
