@extends("layouts.layout")

@section("tienda")
    {{$tienda}}
@endsection


@section("tabla")
    <table>
        <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Tipo</th>
            <th>Precio</th>
            <th>Detalle</th>
        </tr>
        @foreach($zapatillas as $zapatilla)
            <tr>
                <td>{{$zapatilla->getMarca()}}</td>
                <td>{{$zapatilla->getModelo()}}</td>
                <td>{{$zapatilla->getTipo()}}</td>
                <td>{{$zapatilla->getPrecio()}}</td>
                <td><a href="index.php">Detalle</a></td>
            </tr>
        @endforeach
    </table>
    </body>
    </html>
@endsection


