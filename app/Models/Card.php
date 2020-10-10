<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'csv',
        'expired',
        'money',
        'user_id',
    ];

    public function transactions()
    {
        return $this->hasMany('App\Models\Transaction', 'source_id');
    }
}
