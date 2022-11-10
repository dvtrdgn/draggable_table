<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class DragAndDrop extends Component
{

    public function updateOrder($newOrder)
    {

       
        foreach ($newOrder as $item) {
            Order::find($item['value'])->update([
                'order'=>$item['order'],
            ]);
        }
    }

    public function render()
    {
        return view('livewire.drag-and-drop', ['orders' => Order::orderBy('order')->get()]);
    }
}
