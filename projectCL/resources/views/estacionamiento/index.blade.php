<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th></th>
            <th>ID estacionamiento</th>
            <th>ID Propietario</th>
            <th>Numero</th>     
        </tr>
    </thead>

    <tbody>
    @foreach($estacionamientos as $estacionamiento)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$estacionamiento->ID_est}}</td>
            <td>{{$estacionamiento->ID_prop}}</td>
            <td>{{$estacionamiento->Numero}}</td>
            <td>
                <form method="post" action="{{url('/estacionamiento/'.$estacionamiento->ID_est)}}">
                {{csrf_field() }}
                {{method_field('GET')}}
                <button type="submit">Ver mas</button>
                    
                </form>
            </td>
            <td>
                <a href="{{url('/estacionamiento/'.$estacionamiento->ID_est.'/edit')}}">
                 <button type="submit" onclick="return confirm('Editar');">Editar</button>
                </a>

            <td>
            <td>
            <form method="post" action="{{url('/estacionamiento/'.$estacionamiento->ID_est)}}">
            {{csrf_field() }}
            {{method_field('DELETE')}}
            <button type="submit" onclick="return confirm('Borrar');">Borrar</button>
                
            </form>
        </td>
        </tr>
    @endforeach
    </tbody>

</table>