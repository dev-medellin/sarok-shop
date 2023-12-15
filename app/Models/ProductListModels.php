<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductListModels extends Model
{
    use HasFactory;

    public $table = 'product_list';
    public $fillable = ['product_name','product_price','product_decs','product_img','product_quantity', 'status'];
}
