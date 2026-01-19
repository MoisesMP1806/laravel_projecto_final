<div class="container mt-4">
    <div class="card offset-3 col-6">
        <div class="card-header">
            Actualizar cliente
        </div>

        <div class="card-body">

            {{-- Mensaje de éxito --}}
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            <form wire:submit.prevent="save">

                {{-- Nombre --}}
                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input wire:model="name" type="text" class="form-control">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Email --}}
                <div class="mb-3">
                    <label class="form-label">Correo electrónico</label>
                    <input wire:model="email" type="email" class="form-control">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Teléfono --}}
                <div class="mb-3">
                    <label class="form-label">Teléfono</label>
                    <input wire:model="phone" type="text" class="form-control">
                    @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Contraseña --}}
                <div class="mb-3">
                    <label class="form-label">Contraseña</label>
                    <input wire:model="password" type="password" class="form-control">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Género --}}
                <div class="mb-3">
                    <label class="form-label">Género</label>
                    <input wire:model="gender" type="text" class="form-control">
                    @error('gender')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Empleo --}}
                <div class="mb-3">
                    <label class="form-label">Ocupación</label>
                    <input wire:model="employment" type="text" class="form-control">
                    @error('employment')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">
                    Actualizar
                </button>

                <a href="/customers" class="btn btn-secondary ms-2">
                    Cancelar
                </a>

            </form>
        </div>
    </div>
</div>

