<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
=======
>>>>>>> d2bba448b39fb54a7649c576338c7fed24d6c898

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
<<<<<<< HEAD
     * @var array
=======
     * @var array<int, string>
>>>>>>> d2bba448b39fb54a7649c576338c7fed24d6c898
     */
    protected $fillable = [
        'name',
        'price',
        'description',
<<<<<<< HEAD
        'category_id', 
        'quantity',
        'image',
    ];

    /**
     * Get the category that owns the product.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }
=======
    ];
>>>>>>> d2bba448b39fb54a7649c576338c7fed24d6c898
}