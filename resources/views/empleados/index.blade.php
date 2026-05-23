<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Lista Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="d-flex justify-content-between mb-4">
            <h2>RRHH - Empleados</h2>
            <a href="{{route('empleados.create')}}" class="btn btn-primary">+ Nuevo Empleado</a>
        </div>
        <table class="table table-hover shadow-sm">
            <thead class="table-dark">
                <tr><th>ID</th><th>Nombre</th><th>Cargo</th><th>Salario</th><th>Contratación</th><th>Acciones</th></tr>
            </thead>
            <tbody>
                @foreach($empleados as $emp)
                <tr>
                    <td>{{$emp->id}}</td>
                    <td>{{$emp->nombre}}</td>
                    <td>{{$emp->cargo}}</td>
                    <td>{{$emp->salario}}</td>
                    <td>{{$emp->fecha_contratacion}}</td>
                    <td>
                        <a href="{{route('empleados.edit',$emp->id)}}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{route('empleados.destroy',$emp->id)}}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar empleado?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>