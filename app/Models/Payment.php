<?php

namespace App\Models;

use App\Models\Order;
use App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'user_id',
        'order_id',
        'payment_method',
        'payment_status',
    ];

    //relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
