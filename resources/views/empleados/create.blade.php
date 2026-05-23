<!DOCTYPE html>
<html lang="es">
<head><title>Nuevo Empleado</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-success text-white"><h4>Registrar Empleado</h4></div>
            <div class="card-body">
                <form action="{{route('empleados.store')}}" method="POST">
                    @csrf
                    <div class="mb-3"><label>Nombre</label><input type="text" name="nombre" class="form-control" required></div>
                    <div class="mb-3"><label>Cargo</label><input type="text" name="cargo" class="form-control" required></div>
                    <div class="mb-3"><label>Salario</label><input type="number" step="0.01" name="salario" class="form-control" required></div>
                    <div class="mb-3"><label>Fecha Contratación</label><input type="date" name="fecha_contratacion" class="form-control" required></div>
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <a href="{{route('empleados.index')}}" class="btn btn-secondary">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>