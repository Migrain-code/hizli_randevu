<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerFavorite extends Model
{
    use HasFactory;

    public function business()
    {
        return $this->hasOne(Business::class, 'id', 'business_id');
    }
}
