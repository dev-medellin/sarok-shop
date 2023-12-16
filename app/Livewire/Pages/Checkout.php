<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Libraries\Templates;
use App\Models\BillingShipmentModel;
use App\Models\ShoppingCartModel;
use Auth;

class Checkout extends Component
{
    public $temp;
    public $cartCheckout;
    public $subTotal = 0;
    public $total = 0;
    public $shipping = 120;
    public $formData;
    public $shipPayment;

    public function mount(Templates $templats){
        $this->temp = $templats->style();
    }

    public function render()
    {
        $this->total = 0; $this->subTotal = 0;
        $this->cartCheckout = ShoppingCartModel::select('product_list.*','product_list.product_price as productPrice','shopping_cart.product_quantity as prodQuanty','product_list.id','shopping_cart.product_id','shopping_cart.id as shopId','shopping_cart.user_id')
        ->leftJoin('product_list','product_list.id', '=', 'shopping_cart.product_id')
        ->where('shopping_cart.user_id', Auth::user()->id)->get();
        foreach($this->cartCheckout as $key){
            $this->subTotal += $key['product_price'] * $key['prodQuanty'];
        }
        $this->total = $this->subTotal + $this->shipping;
        return view('pages.checkout')
        ->layout('app',['data' => $this->temp]);
    }

    public function addShipping($amount){
        return $this->shipping = $amount;
    }

    public function billingForm($formData){
        if($this->shipPayment != null){
            $this->cartCheckout = ShoppingCartModel::where('user_id', Auth::user()->id)->get();
            $formData['payment'] = $this->shipPayment;
            $savedBilling = BillingShipmentModel::updateOrCreate(['user_id' => Auth::user()->id],$formData);
            // $formData['cart_id'] = $this->cartCheckout;
        }else{
            session()->flash('message','Please select payment method');
        }
    }

    public function payment_method($payment){
        $this->shipPayment = $payment;
    }
}
