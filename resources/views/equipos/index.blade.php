<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Lista Equipos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="d-flex justify-content-between mb-4">
            <h2>Equipos</h2>
            <a href="{{route('equipos.create')}}" class="btn btn-primary">+ Nuevo Equipo</a>
        </div>
        <table class="table table-hover shadow-sm">
            <thead class="table-dark">
                <tr><th>ID</th><th>Número de Serie</th><th>Descripción</th><th>Costo</th><th>Acciones</th></tr>
            </thead>
            <tbody>
                @foreach($equipos as $equipo)
                <tr>
                    <td>{{$equipo->id}}</td>
                    <td>{{$equipo->numero_serie}}</td>
                    <td>{{$equipo->descripcion}}</td>
                    <td>{{$equipo->costo}}</td>
                    <td>
                        <a href="{{route('equipos.edit',$equipo->id)}}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{route('equipos.destroy',$equipo->id)}}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar equipo?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>