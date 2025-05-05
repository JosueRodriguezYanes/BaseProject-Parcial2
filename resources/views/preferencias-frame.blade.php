<div class="container mt-5">
    <div class="card mt-4">
        <div class="card-header">
            <h4>Lista de Libros</h4>
        </div>
        <div class="card-body">
            @if(empty($libros))
                <p>No se encontraron libros.</p>
            @else
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
            @endif
        </div>
    </div>
</div>
