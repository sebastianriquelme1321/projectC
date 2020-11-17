<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th></th>
           
            <th>ID Registro</th>
            <th>Asunto</th>
            <th>Monto</th>
            <th>Fecha</th>
            <th>Detalle</th>            
        </tr>
    </thead>

    <tbody>
    @foreach($registros as $registro)
        <tr>
            
            <td>{{$loop->iteration}}</td>
           
            <td>{{$registro->ID_registro}}</td>
            <td>{{$registro->Asunto}}</td>
            <td>{{$registro->Monto}}</td>
            <td>{{$registro->Fecha_de_pago}}</td>
            <td>{{$registro->Detalle}}</td>
            <td>
                <form method="post" action="{{url('/registro/'.$registro->ID_registro)}}">
                {{csrf_field() }}
                {{method_field('GET')}}
                <button type="submit">Ver mas</button>
                    
                </form>
            </td>
            <td>
                <a href="{{url('/registro/'.$registro->ID_registro.'/edit')}}">
                 <button type="submit" onclick="return confirm('Editar');">Editar</button>
                </a>

            <td>
            <td>
            <form method="post" action="{{url('/registro/'.$registro->ID_registro)}}">
            {{csrf_field() }}
            {{method_field('DELETE')}}
            <button type="submit" onclick="return confirm('Borrar');">Borrar</button>
                
            </form>
        </td>
        </tr>
    @endforeach
    </tbody>

</table>