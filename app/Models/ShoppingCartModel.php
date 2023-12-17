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

    public static function getCart($userID){
        return self::select('product_list.product_name as productName','shopping_cart.created_at','product_list.product_price as productPrice','shopping_cart.product_quantity as productQuantity','shopping_cart.product_id as shopProdID','shopping_cart.user_id','product_list.id')
        ->leftJoin('product_list','product_list.id', '=', 'shopping_cart.product_id')
        ->where('shopping_cart.user_id',$userID)->get();
    }
}
