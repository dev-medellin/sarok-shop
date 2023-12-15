<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Libraries\Templates;
use App\Helpers\TestProductData;
use App\Models\ProductListModels;
use App\Models\ShoppingCartModel;
use Auth;
use Livewire\Attributes\On;

class ShopList extends Component
{
    public $temp;
    public $productDetails;
    public $testDatas;
    public $quantityCount = 1;
    public $data = [];
    public $testYawa;
    public $teest;
    public function mount(Templates $templats, TestProductData $testData){
        $this->temp = $templats->style();
        $this->testDatas = ProductListModels::get() ;
    }

    public function render()
    {
        // foreach($this->testDatas as $key){
        //     ProductListModels::updateOrCreate($key);
        // }
        $data['product'] = $this->testDatas;
        return view('pages.shop-list')
        ->layout('app',['data' => $this->temp])
        ->with(['listData' => $data]);
    }

    public function productDetailsModal($id){
        $this->teest = '';
        $this->productDetails = ProductListModels::where('id',$id)->first();
        // $this->dispatch('showProductModal', $id);
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
