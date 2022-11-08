<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable = [
        'number', 'user_id'
    ];
    
    public $timestamps = true;

    protected function user()
    {
        return $this->belongsTo(User::class);
    }
}
