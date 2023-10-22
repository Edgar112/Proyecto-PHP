<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <body style="background-color:PaleGoldenrod;">
        <div class="container py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card border-black" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="card-body p-4 p-lg-5 text-black" >
                                <h3 class="text-center py-3">¡Registro de Clientes!</h3>
    
                                <form name= "" method="post" action="{{ route('clientes.store') }}">
                                    
                                    <!-- Protección de ataques maliciosos -->
                                    @csrf

                                    <div class="form-outline mb-4">
                                        <label>Nombre: </label>
                                        <input type="text" name="nombre" value="{{ old('nombre') }}" class="form-control form-control-lg"/>
                                        <span style="color: red">
                                        @error('nombre')
                                            {{ $message }}
                                        @enderror 
                                        </span>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label>Apellido: </label>
                                        <input type="text" name="apellido" value="{{ old('apellido') }}" class="form-control form-control-lg" />
                                        <span style="color: red">
                                            @error('apellido')
                                                {{ $message }}
                                            @enderror 
                                        </span>
                                    </div>
    
                                    <div class="form-outline mb-4">
                                        <label>DNI: </label>
                                        <input type="number" name="dni" value="{{ old('dni') }}" class="form-control form-control-lg" />
                                        <span style="color: red">
                                            @error('dni')
                                                {{ $message }}
                                            @enderror 
                                        </span>
                                    </div>
    
                                    <div class="form-outline mb-4">
                                        <label>F.Registro: </label>
                                        <input type="date" name="fregistro" value="{{ old('fregistro') }}" class="form-control form-control-lg" />
                                        <span style="color: red">
                                            @error('fregistro')
                                                {{ $message }}
                                            @enderror 
                                        </span>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label>Teléfono: </label>
                                        <input type="number" name="celular" value="{{ old('celular') }}" class="form-control form-control-lg" />
                                        <span style="color: red">
                                            @error('celular')
                                                {{ $message }}
                                            @enderror 
                                        </span>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label>Dirección: </label>
                                        <input type="text" name="direccion" value="{{ old('direccion') }}" class="form-control form-control-lg" />
                                        <span style="color: red">
                                            @error('direccion')
                                                {{ $message }}
                                            @enderror 
                                        </span>
                                    </div>
                                    
                                    <div class="form-outline mb-4">
                                        <label>Correo: </label>
                                        <input type="email"  name="correo" value="{{ old('correo') }}" class="form-control form-control-lg" />
                                        <span style="color: red">
                                            @error('correo')
                                                {{ $message }}
                                            @enderror 
                                        </span>
                                    </div>
    
                                    <div class="text-center justify-content-between">
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                        <button type="button" onclick="location.href='{{ url('/menu/clientes/index') }}'" class="btn btn-dark">Cancelar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</body>
</html>