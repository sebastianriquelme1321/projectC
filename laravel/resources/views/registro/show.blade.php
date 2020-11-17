<table class="table table-light">

    <thead class="thead-light">
        <tr>
            
           
            <th>ID Registro</th>
            <th>ID Condominio</th>
            <th>Asunto</th>
            <th>Monto</th>  
            <th>Fecha</th>
            <th>Detalle</th>       
        </tr>
    </thead>

    <tbody>
    
        <tr>           
           
            <td>{{$datosVERMAS->ID_registro}}</td>
            <td>{{$datosVERMAS->ID_condominio}}</td>
            <td>{{$datosVERMAS->Asunto}}</td>
            <td>{{$datosVERMAS->Fecha_de_pago}}</td> 
            <td>{{$datosVERMAS->Detalle}}</td>            
            
        </tr>
    
    </tbody>

</table>