<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'name',
        'thumbnail',
        'description',
        'price'
    ];

    public function cart_item() {
        return $this->hasOne(CartItem::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
