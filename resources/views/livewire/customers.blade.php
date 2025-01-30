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
                        <button type="button" class="btn btn-danger btn-sm"
                            data-bs-toggle="modal" data-bs-target="#confirmDeleteModal"
                            wire:click="">
                            Eliminar
                        </button>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Modal de Confirmación -->
    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmDeleteModalLabel">Confirmar Eliminación</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>

                    <div class="modal-body">
                        ¿Estás seguro de que deseas eliminar a ? Esta acción no se puede deshacer.
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-danger" wire:click="deleteCustomer" data-bs-dismiss="modal">
                            Eliminar
                        </button>
                    </div>

                </div>
            </div>
    </div>
    <div>
    @if(session()->has('message'))
        <div class="alert alert-success mt-3">
            {{ session('message') }}
        </div>
    @endif
    </div>
</div>