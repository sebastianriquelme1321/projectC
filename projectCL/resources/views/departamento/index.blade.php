<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th></th>
           
            <th>ID Depto</th>
            <th>ID Condominio</th>
            <th>ID Propietario</th>
            <th>Numero</th>
            <th>Bloque</th>            
        </tr>
    </thead>

    <tbody>
    @foreach($departamentos as $departamento)
        <tr>
            
            <td>{{$loop->iteration}}</td>
           
            <td>{{$departamento->ID_dept}}</td>
            <td>{{$departamento->ID_condominio}}</td>
            <td>{{$departamento->ID_prop}}</td>
            <td>{{$departamento->Numero}}</td>
            <td>{{$departamento->Bloque}}</td>
            <td>
                <form method="post" action="{{url('/departamento/'.$departamento->ID_dept)}}">
                {{csrf_field() }}
                {{method_field('GET')}}
                <button type="submit">Ver mas</button>
                    
                </form>
            </td>
            <td>
                <a href="{{url('/departamento/'.$departamento->ID_dept.'/edit')}}">
                 <button type="submit" onclick="return confirm('Editar');">Editar</button>
                </a>

            <td>
            <td>
            <form method="post" action="{{url('/departamento/'.$departamento->ID_dept)}}">
            {{csrf_field() }}
            {{method_field('DELETE')}}
            <button type="submit" onclick="return confirm('Borrar');">Borrar</button>
                
            </form>
        </td>
        </tr>
    @endforeach
    </tbody>

</table>