<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Libraries\Templates;
use App\Mail\InvoiceEmail;
use App\Models\BillingShipmentModel;
use App\Models\OrderDetails;
use App\Models\ShoppingCartModel;
use Illuminate\Support\Facades\Mail;
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
        if(!Auth::check()){
            session()->flash('message', 'Please login first.');
            redirect('/login');
        }
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
            $order_id = substr(str_shuffle("0123456789"), 0, 11);
            $data = [
                'order_tracker_id' => $order_id,
                'user_id' => Auth::user()->id,
                'billing_id' => $savedBilling->id,
                'cart_details' => $this->cartCheckout,
                'payment' => $this->shipPayment,
                'status' => 'shipment'
            ];
            $orderDetails = OrderDetails::updateOrCreate(['user_id' => Auth::user()->id],$data);
            if($orderDetails){
                $deletedCart = ShoppingCartModel::where('user_id', Auth::user()->id)->delete();
                if($deletedCart){
                    $info = [
                        'fullname' => $formData['fname'].' '.$formData['lname'],
                        'order_id' => $order_id,
                        'payment_method' => $this->shipPayment,
                        'house_number' => $orderDetails->house_number,
                        'town_city' => $orderDetails->town_city,
                        'country' => $orderDetails->country,
                        'post_code' => $orderDetails->post_code,
                        'order_date' => date('F d, Y', strtotime($orderDetails->created_at)),
                        'cart_info' => $orderDetails->cart_details
                    ];
                    Mail::to($formData['email'])->send(new InvoiceEmail($info));
                    redirect('/order-completed/'.$order_id);
                }
            }
        }else{
            session()->flash('message','Please select payment method');
        }
    }

    public function payment_method($payment){
        $this->shipPayment = $payment;
    }
}
