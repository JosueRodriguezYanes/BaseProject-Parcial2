<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Libros</title>
    <!-- Vincular Bootstrap (si aún no lo tienes) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <!-- Card de Bootstrap -->
        <div class="card">
            <div class="card-header">
                <h4>Lista de Libros</h4>
            </div>
            <div class="card-body">
                <!-- Tabla de Bootstrap -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Autor</th>
                            <th>Año</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($libros as $libro)
                            <tr>
                                <td>{{ $libro['titulo'] }}</td>
                                <td>{{ $libro['autor'] }}</td>
                                <td>{{ $libro['anio'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card mt-4">
    <div class="card-header">Conversor de Monedas (SOAP)</div>
    <div class="card-body">
        <form action="{{ route('convertir.moneda') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Moneda Origen (ej: USD)</label>
                <input type="text" name="from" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Moneda Destino (ej: EUR)</label>
                <input type="text" name="to" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Monto</label>
                <input type="number" step="0.01" name="amount" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Fecha (YYYY-MM-DD)</label>
                <input type="date" name="date" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Convertir</button>
        </form>

        @if(session('resultado'))
            <div class="alert alert-success mt-3">
                Resultado: {{ session('resultado') }}
            </div>
        @endif
    </div>
    </div>




    <!-- Vincular JS de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
