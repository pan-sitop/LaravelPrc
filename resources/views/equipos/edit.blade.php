<!DOCTYPE html>
<html lang="es">
<head><title>Editar Equipo</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-warning"><h4>Editar Equipo</h4></div>
            <div class="card-body">
                <form action="{{route('equipos.update',$equipo->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3"><label>Número de Serie</label><input type="text" name="numero_serie" value="{{$equipo->numero_serie}}" class="form-control" required></div>
                    <div class="mb-3"><label>Descripción</label><input type="text" name="descripcion" value="{{$equipo->descripcion}}" class="form-control" required></div>
                    <div class="mb-3"><label>Costo</label><input type="number" step="0.01" name="costo" value="{{$equipo->costo}}" class="form-control" required></div>
                    <button type="submit" class="btn btn-warning">Actualizar</button>
                    <a href="{{route('equipos.index')}}" class="btn btn-secondary">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>