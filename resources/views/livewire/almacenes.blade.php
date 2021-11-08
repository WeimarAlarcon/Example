<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre de Almacen</th>
            </tr>
        </thead>
        <tbody>
            @foreach($almacenes as $almacen)
            <tr>
                <td>{{$almacen->id}}</td>
                <td>{{$almacen->nombre}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
