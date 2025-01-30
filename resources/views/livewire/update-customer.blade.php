<div>
    <div class="card offset-3 col-6">
        <div class="card-header">
            Actualizar cliente
        </div>
        <div class="card-body">
          
            <form wire:submit="save">
                <div class="mb-3">
                  <label class="form-label">Nombre </label>
                  <input wire:model="name" type="text" class="form-control" aria-describedby="nameHelp">
                </div>
                <div class="mb-3">
                    <label class="form-label">Dirección </label>
                    <input wire:model="email" type="text" class="form-control" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label class="form-label">Teléfono</label>
                  <input wire:model="phone"  type="text" class="form-control" >
                </div>
                <div class="mb-3">
                  <label class="form-label">Contraseña</label>
                  <input wire:model="password" type="text" class="form-control" >
                </div>
                <div class="mb-3">
                  <label class="form-label">Genero</label>
                  <input wire:model="gender" type="text" class="form-control" >
                </div>
                <div class="mb-3">
                  <label class="form-label">Ocupacion</label>
                  <input wire:model="employment" type="text" class="form-control" >
                </div>
                <button onclick="return alert('cliente creado')" type="submit" class="btn btn-primary">Actualizar</button>
              </form>
        </div>
      </div>
</div>

