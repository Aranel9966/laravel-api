<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'total', 'status', 'number', 'guest_first_name', 'guest_last_name', 'guest_address', 'guest_email'];

    public function dish()
    {
        return $this->belongsTo(dish::class);
    }
}
