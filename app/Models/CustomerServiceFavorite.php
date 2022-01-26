<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerServiceFavorite extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'customer_id'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
