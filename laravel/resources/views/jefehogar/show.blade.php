<table class="table table-light">

    <thead class="thead-light">
        <tr>          
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
    
        <tr>           
           
            <td>{{$datosVERMAS->ID_jefe}}</td>
            <td>{{$datosVERMAS->ID_dept}}</td>
            <td>{{$datosVERMAS->Rut_jefe}}</td>
            <td>{{$datosVERMAS->Ver_jefe}}</td>
            <td>{{$datosVERMAS->Nombre}}</td>
            <td>{{$datosVERMAS->Apellido}}</td>
            <td>{{$datosVERMAS->Fono}}</td>
            <td>{{$datosVERMAS->Correo}}</td>           
            
        </tr>
    
    </tbody>

</table>