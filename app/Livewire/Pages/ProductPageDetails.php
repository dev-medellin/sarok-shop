<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Libraries\Templates;
use App\Models\ProductListModels;
use App\Models\ShoppingCartModel;
use Auth;
use Livewire\Attributes\On;

class ProductPageDetails extends Component
{
    public $temp;
    public $productDetails;
    public $quantityCount = 1;

    public function mount(Templates $templats, $id){
        $this->temp = $templats->style();
        $this->productDetails = ProductListModels::where('id',$id)->first();
    }

    public function render()
    {
        return view('pages.product-page-details')
        ->layout('app',['data' => $this->temp]);
    }

    public function decrement($quantityStore){
        if($this->quantityCount > 1){
            $this->quantityCount--;
        }
    }

    public function increment($quantityStore){
      if($quantityStore != 0 && $this->quantityCount >! $quantityStore ){
        $this->quantityCount+=1;
      }
    }

    public function goToAddCart($productID){
        $this->teest = $productID;
        if(Auth::user()){
            $product = [
                'product_id' => $productID,
                'product_quantity' => $this->quantityCount,
                'user_id' => Auth::user()->id,
            ];
            ShoppingCartModel::addToCart($product);
            $this->dispatch('cartGetCount');
        }else{
            redirect('/login');
        }
    }
}
