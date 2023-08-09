<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'status',
        'user_street',
        'user_house',
        'user_apartment',
        'phone',
        'email',
        'order_notes',
        'total_sum',
        'pay'
    ];

    public function items()
    {
        return $this -> hasMany(OrderItem::class);
    }

    public static function add(array $input)
    {
        $order = new static;
        $order->fill($input);
        $order->phone = $input['phone'] != null ? str_replace(['(', ')', '-', ' ', '+'], '', $input['phone']) : null;
        $order->save();

        return $order;
    }

    public function getCustomerAdress()
    {
        $data = [];

        $data[] = $this->user_street ?? $this->user_street;
        $data[] = $this->user_house ?? $this->user_house;
        $data[] = $this->user_apartment ?? $this->user_apartment;

        return implode(' ', $data);
    }
}
