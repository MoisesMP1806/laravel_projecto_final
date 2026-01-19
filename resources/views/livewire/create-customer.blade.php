<div>
    <div class="card offset-3 col-6">
        <div class="card-header">
          Crea Cliente
        </div>
        <div class="card-body">

            <form wire:submit.prevent="save">
                <div class="mb-3">
                  <label class="form-label">Nombre</label>
                  <input wire:model="name" type="text" class="form-control" aria-describedby="nameHelp">
                  @error('name')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Dirección de Correo Electrónico</label>
                    <input wire:model="email" type="text" class="form-control" aria-describedby="emailHelp">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                  <label class="form-label">Teléfono</label>
                  <input wire:model="phone" type="text" class="form-control">
                  @error('phone')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>

                <div class="mb-3">
                  <label class="form-label">Contraseña</label>
                  <input wire:model="password" type="text" class="form-control">
                  @error('password')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>

                <div class="mb-3">
                  <label class="form-label">Genero</label>
                  <input wire:model="gender" type="text" class="form-control">
                  @error('gender')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>

                <div class="mb-3">
                  <label class="form-label">Ocupacion</label>
                  <input wire:model="employment" type="text" class="form-control">
                  @error('employment')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>

        </div>
      </div>
</div>
