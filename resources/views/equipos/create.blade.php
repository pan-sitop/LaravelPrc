<!DOCTYPE html>
<html lang="es">
<head><title>Nuevo Equipo</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-success text-white"><h4>Registrar Equipo</h4></div>
            <div class="card-body">
                <form action="{{route('equipos.store')}}" method="POST">
                    @csrf
                    <div class="mb-3"><label>Número de Serie</label><input type="text" name="numero_serie" class="form-control" required></div>
                    <div class="mb-3"><label>Descripción</label><input type="text" name="descripcion" class="form-control" required></div>
                    <div class="mb-3"><label>Costo</label><input type="number" step="0.01" name="costo" class="form-control" required></div>
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <a href="{{route('equipos.index')}}" class="btn btn-secondary">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>