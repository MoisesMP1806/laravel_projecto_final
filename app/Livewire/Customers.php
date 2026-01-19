<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class Customers extends Component
{
    public function render()
    {
        return view('livewire.customers', [
            'customers' => Customer::all(),
        ]);
    }

    public function deleteCustomer($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();

        session()->flash('message', 'Cliente eliminado correctamente.');
    }
}
