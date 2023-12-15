<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCartModel extends Model
{
    use HasFactory;
    public $table = 'shopping_cart';
    public $fillable = ['product_id','product_quantity','user_id'];

    public static function addToCart($data)
    {
        $saved = self::updateOrCreate(['user_id' => $data['user_id'], 'product_id' => $data['product_id']], $data);
        return $saved;
    }
}
