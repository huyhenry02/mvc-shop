<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    public const STATUS_PENDING = 'pending';
    public const STATUS_SHIPPING = 'shipping';
    public const STATUS_COMPLETED = 'completed';

    protected $fillable = [
        'code',
        'user_id',
        'order_date',
        'ship_name',
        'ship_email',
        'ship_phone',
        'ship_address',
        'total',
        'status'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function orderDetails(): HasMany
    {
        return $this->hasMany(OrderDetail::class);
    }
}
