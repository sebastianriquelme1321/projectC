<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th></th>
           
            <th>ID Jefe</th>
            <th>ID Depto</th>
            <th>Rut Jefe</th>
            <th>Ver Jefe</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fono</th>
            <th>Correo</th> 

        </tr>
    </thead>

    <tbody>
    @foreach($jefe_de_hogars as $jefe_de_hogar)
        <tr>
            
            <td>{{$loop->iteration}}</td>
           
            <td>{{$jefe_de_hogar->ID_jefe}}</td>
            <td>{{$jefe_de_hogar->ID_dept}}</td>
            <td>{{$jefe_de_hogar->Rut_jefe}}</td>
            <td>{{$jefe_de_hogar->Ver_jefe}}</td>
            <td>{{$jefe_de_hogar->Nombre}}</td>
            <td>{{$jefe_de_hogar->Apellido}}</td>
            <td>{{$jefe_de_hogar->Fono}}</td>
            <td>{{$jefe_de_hogar->Correo}}</td>
            <td>
                <form method="post" action="{{url('/jefe_de_hogar/'.$jefe_de_hogar->ID_jefe)}}">
                {{csrf_field() }}
                {{method_field('GET')}}
                <button type="submit">Ver mas</button>                    
                </form>
            </td>
            <td>
                <a href="{{url('/jefe_de_hogar/'.$jefe_de_hogar->ID_jefe.'/edit')}}">
                 <button type="submit" onclick="return confirm('Editar');">Editar</button>
                </a>
            </td>
            <td>
            <form method="post" action="{{url('/jefe_de_hogar/'.$jefe_de_hogar->ID_jefe)}}">
            {{csrf_field() }}
            {{method_field('DELETE')}}
            <button type="submit" onclick="return confirm('Borrar');">Borrar</button>
                
            </form>
        </td>
        </tr>
    @endforeach
    </tbody>

</table>