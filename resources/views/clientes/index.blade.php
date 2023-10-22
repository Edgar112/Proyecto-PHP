<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center py-4">
        <h3><b>Lista de Clientes</b></h3>

        <div class="py-3">
            <a href="{{ url('menu') }}">Menu</a> | 
			<a href="{{ url('/menu/clientes/create') }}">Registrar</a>
        </div>

        <table class="table table-hover">
			<thead class="table-info">
				<tr>
					<th class="fw-bold">ID</th>
					<th class="fw-bold">NOMBRE</th>
                    <th class="fw-bold">APELLIDO</th>
					<th class="fw-bold">DNI</th>
					<th class="fw-bold">F.REGISTRO</th>
                    <th class="fw-bold">TELÉFONO</th>
                    <th class="fw-bold">DIRECCIÓN</th>
					<th class="fw-bold">CORREO</th>
					<th class="fw-bold">OPCION</th>
				</tr>
			</thead>

			<tbody>
				@forEach ($clientesDb as $cliente)
					<tr>
						<td>{{ $cliente->clienteId }}</td>
						<td>{{ $cliente->nombre }}</td>
                        <td>{{ $cliente->apellido }}</td>
						<td>{{ $cliente->dni }}</td>
						<td>{{ $cliente->fregistro }}</td>
                        <td>{{ $cliente->celular }}</td>
                        <td>{{ $cliente->direccion }}</td>
						<td>{{ $cliente->correo }}</td>
						<td>
							<a href="{{ route('clientes.edit',$cliente) }}">Editar</a>
							<a href="{{ route('clientes.delete',$cliente) }}">Eliminar</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
    </div>
</body>
</html>