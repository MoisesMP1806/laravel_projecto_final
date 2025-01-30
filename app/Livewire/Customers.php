<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class Customers extends Component
{
    public $customerId;
    public $customers=[]; 

    public function mount()
    {
        $this->customers=Customer::all();
    }
    public function getCustomer($id)
    {
        $this->customerId = $id; 
    }
    public function render()
    {
        return view('livewire.customers');
    }

    public function deleteCustomer(){
        if($customerId){
            $customer = Customer::find($this->customerId);
            $customer->delete();
            $this->customers = Customer::all();
            session()->flash('message', 'Cliente eliminado correctamente.');
        }
        
    }

    /*public function delete($id){
        Customer::delete($id);
        session()->flash('message', 'Cliente eliminado correctamente.');
    }
        */
}
