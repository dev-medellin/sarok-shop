<?php

namespace App\Livewire\Pages;

use App\Models\ShoppingCartModel;
use Livewire\Component;
use Auth;
use Livewire\Attributes\On;

class CartCount extends Component
{

    public $cartCount = 0;
    public $cartInfo;
    public $total = 0;
    public $subTotal = 0;

    public function render()
    {
        $this->getCartInfo();
        $this->getCartCount();
        return view('pages.cart-count');
    }

    #[On('cartGetCount')]
    public function getCartCount()
    {
        $this->cartCount = ShoppingCartModel::where('user_id', Auth::user()->id)->count();
    }

    public function getCartInfo()
    {
        $this->cartInfo = ShoppingCartModel::select('product_list.*','shopping_cart.product_quantity as prodQuanty','product_list.id','shopping_cart.product_id','shopping_cart.user_id')
                        ->leftJoin('product_list','product_list.id', '=', 'shopping_cart.product_id')
                        ->where('shopping_cart.user_id', Auth::user()->id)->get();
        foreach($this->cartInfo as $key){
            $this->subTotal += $key['product_price'] * $key['prodQuanty'];
        }
        $this->total = $this->subTotal;
    }
}
