<?php

namespace App\Livewire\Modals;

use App\Models\ProductListModels;
use Livewire\Component;

class QuickViewProduct extends Component
{
    public $productDetails;
    protected $listeners = [
        'showProductModal' => 'productDetailsModal',
    ];
}
