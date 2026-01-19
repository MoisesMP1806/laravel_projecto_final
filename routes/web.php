<?php

use App\Livewire\Customers;
use App\Livewire\ViewCustomer;
use App\Livewire\CreateCustomer;
use App\Livewire\UpdateCustomer;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//ruta para crear un customer 
Route::get('/customers/create', CreateCustomer::class);

//ruta para ver un customer 
Route::get('/customers', Customers::class);

//pasa como parametro el customer en la visa al clickar el boton y retorna la vista customer
Route::get('/customers/{customer}', ViewCustomer::class);

//ruta para actualizar el cliente
Route::get('/customers/update/{customer}', UpdateCustomer::class);

//Route::delete('/eliminar/{id}', [Customers::class, 'delete'])->name('destroy');
