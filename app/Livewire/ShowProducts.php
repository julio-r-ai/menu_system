<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Product;

class ShowProducts extends Component
{
    public function render()
    {
        $produtcs = Product::all();

        return view('livewire.show-products', ['products' => $produtcs]);
    }
}
