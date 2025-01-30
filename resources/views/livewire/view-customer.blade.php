<div>
    <div class="card">
        <h5 class="card-header">Nombre del cliente: {{$customer->name}}</h5>
        <div class="card-body">
          <h5 class="card-title">Email del cliente: {{$customer->email}}</h5>
          <h5 class="card-title">Telefono del cliente: {{$customer->phone}}</h5>
          <h5 class="card-title">Contraseña del del cliente: {{$customer->password}}</h5>
          <h5 class="card-title">Genero del cliente: {{$customer->gender}}</h5>
          <h5 class="card-title">Oficio del cliente: {{$customer->employment}}</h5>
          <a href="/customers" class="btn btn-primary">Inicio</a>
        </div>
      </div>
</div>
