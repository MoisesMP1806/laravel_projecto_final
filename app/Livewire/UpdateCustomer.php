<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;

class UpdateCustomer extends Component
{
    public $name;
    public $email;
    public $phone;
    public $password;
    public $gender;
    public $employment;

    public $customer;
    public function mount(Customer $customer)
    {
        /*
        construye el "objeto de un cliente"
        de manera individual asignandole valores 
        a sus propiedades
        */
        $this->name = $customer->name;
        $this->email = $customer->email;
        $this->phone = $customer->phone;
        $this->password = $customer->password;
        $this->gender = $customer->gender;
        $this->employment = $customer->employment;

        $this->customer = $customer;
    }

    public function render()
    {
        return view('livewire.update-customer');
    }

    public function save(){
        //busca el objeto con el id en la base de datos
        $customerUpdate = Customer::find($this->customer->id);
        $customerUpdate->name = $this->name;
        $customerUpdate->email = $this->email;
        $customerUpdate->phone = $this->phone;
        $customerUpdate->password = $this->password;
        $customerUpdate->gender = $this->gender;
        $customerUpdate->employment = $this->employment;
        $customerUpdate->save();
        session()->flash('message', 'Cliente actualizado correctamente.');
    }
}
