Este es el index 

<table class="table table-light">
    <tbody>
        <tr>
            <th>ID_prop</th>
            <th>Rut_emp </th>
            <th>Ver_emp </th>
            <th>Nombre </th>
            <th>Apellido</th>
            <th>Fono</th>
            <th>Correo</th>


        </tr>
    </tbody>

    <tfoot>
        @foreach($propietarios as $propietario)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$propietario->Rut_emp }}</td>
            <td>{{$propietario->Ver_emp}}</td>
            <td>{{$propietario->Nombre}}</td>
            <td>{{$propietario->Apellido}}</td>
            <td>{{$propietario->Fono}}</td>
            <td>{{$propietario->Correo}}</td>
            <td>Editar| 
             <form method="post" action="{{url('/propietarios/'.$propietario->id)}}">
             {{ csrf_field()}}
             {{method_field('DELETE')}}
             <button type="submit" onclick="return confirm('Borrar?');">Borrar</button>
             </form></td>
            </td>
           
        </tr>
        @endforeach
        
    </tfoot>
</table>

