<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;

class CreateCustomer extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';
    public $password = '';
    public $gender = '';
    public $employment = '';

    public function render()
    {
        return view('livewire.create-customer');
    }

    public function save()
    {

        // dd ($this->all());
        //trae todos los campos publicos y los asocia con las propiedades
        //Customer::create($this->all());
        //asociacion de los campos mas segura
        Customer::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'password' => $this->password,
            'gender' => $this->gender,
            'employment' => $this->employment
        ]);
        //sirve para limpiar los campos del formulario
        $this->reset();
    }
}
