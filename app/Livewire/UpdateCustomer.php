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
        $validatedData = $this->validate([
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|email|unique:customers,email,'. $this->customer->id,
            'phone' => 'required|string|min:8|max:15',
            'password' => 'nullable|string|min:8',
            'gender' => 'required|in:male,female,other',
            'employment' => 'required|string|max:100',
        ]);

        $updateData = [
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'gender' => $validatedData['gender'],
            'employment' => $validatedData['employment'],
        ];
        $this->customer->update($updateData);
        session()->flash('message', 'Cliente actualizado correctamente.');
    }
}
