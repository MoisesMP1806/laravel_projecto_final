<div>
    <button wire:navigate href="/customers/create" class="btn btn-success btn-sm">Crear Cliente</button>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo Electrónico</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Contraseña</th>
                <th scope="col">Genero</th>
                <th scope="col">Empleo</th>
                <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <th scope="row">{{$customer->id}}</th>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->phone}}</td>
                    <td>{{$customer->password}}</td>
                    <td>{{$customer->gender}}</td>
                    <td>{{$customer->employment}}</td>
                    <td>
                        <button wire:navigate href="/customers/{{$customer->id}}" class="btn btn-primary btn-sm">Ver</button>
                        <button wire:navigate href="/customers/update/{{$customer->id}}" class="btn btn-secondary btn-sm">Editar</button>
                        <button wire:click="deleteCustomer({{ $customer->id }})" 
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('¿Seguro que deseas eliminar este cliente?')">
                            Eliminar
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
    @if(session()->has('message'))
        <div class="alert alert-success mt-3">
            {{ session('message') }}
        </div>
    @endif
    </div>
</div>