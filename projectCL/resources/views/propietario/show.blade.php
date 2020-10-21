<table class="table table-light">

    <thead class="thead-light">
        <tr>
            
           
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Rut</th>
            <th>Verificador</th>
            <th>Rut Empresa</th>
            <th>Verificador Empresa</th>
            <th>fono</th>
            <th>Correo</th>
            <th>Razon Social</th>            
        </tr>
    </thead>

    <tbody>
    
        <tr>           
           
            <td>{{$datosVERMAS->Nombre}}</td>
            <td>{{$datosVERMAS->Apellido}}</td>
            <td>{{$datosVERMAS->Rut_ind}}</td>
            <td>{{$datosVERMAS->Ver_ind}}</td>
            <td>{{$datosVERMAS->Rut_emp}}</td>
            <td>{{$datosVERMAS->Ver_emp}}</td>
            <td>{{$datosVERMAS->Fono}}</td>
            <td>{{$datosVERMAS->Correo}}</td>
            <td>{{$datosVERMAS->Razon_Social}}</td>
            
        </tr>
    
    </tbody>

</table>