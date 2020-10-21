
<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th></th>
           
            <th>Nombre</th>
            <th>Apellido</th>
            <th>fono</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
    @foreach($propietarios as $propietario)
        <tr>
            
            <td>{{$loop->iteration}}</td>
           
            <td>{{$propietario->Nombre}}</td>
            <td>{{$propietario->Apellido}}</td>
            <td>{{$propietario->fono}}</td>
            <td>
                <form method="post" action="{{url('/propietarios/'.$propietario->ID_prop)}}">
                {{csrf_field() }}
                {{method_field('GET')}}
                <button type="submit">Ver mas</button>
                    
                </form>
            </td>

            <td>
            <form method="post" action="{{url('/propietarios/'.$propietario->ID_prop)}}">
            {{csrf_field() }}
            {{method_field('DELETE')}}
            <button type="submit" onclick="return confirm('Borrar');">Borrar</button>
                
            </form>
        </td>
        </tr>
    @endforeach
    </tbody>

</table>