<?php
namespace App\Livewire\Pages;

use Livewire\Component;
use App\Libraries\Templates;
use App\Models\ShoppingCartModel;
use Auth;

class CartView extends Component
{
    public $cartCount = 0;
    public $cartInfo;
    public $total = 0;
    public $temp;
    public $subTotal = 0;
    public $shipping = 0;

    public function mount(Templates $templats){
        $this->temp = $templats->style();
    }

    public function render()
    {
        $this->getCartCount();
        $this->total = 0; $this->subTotal = 0;
        $this->cartInfo = ShoppingCartModel::select('product_list.*','product_list.product_price as productPrice','shopping_cart.product_quantity as prodQuanty','product_list.id','shopping_cart.product_id','shopping_cart.id as shopId','shopping_cart.user_id')
        ->leftJoin('product_list','product_list.id', '=', 'shopping_cart.product_id')
        ->where('shopping_cart.user_id', Auth::user()->id)->get();
        foreach($this->cartInfo as $key){
            $this->subTotal += $key['product_price'] * $key['prodQuanty'];
        }
        $this->total = $this->subTotal + $this->shipping;
        return view('pages.cart-view')
        ->layout('app',['data' => $this->temp]);
    }

    public function getCartCount()
    {
        $this->cartCount = ShoppingCartModel::where('user_id', Auth::user()->id)->count();
    }

    public function incrementQty($id){
        $cart = ShoppingCartModel::whereId($id)->first();
        $cart->product_quantity += 1;
        $cart->save();
    }

    public function decrementQty($id){
        $cart = ShoppingCartModel::whereId($id)->first();
        if($cart->product_quantity > 1 ){
            $cart->product_quantity -= 1;
            $cart->save();
        }
    }

    public function addShipping($amount){
        return $this->shipping = $amount;
    }
}
