<table class="table table-light">

    <thead class="thead-light">
        <tr>
            
           
            <th>ID Pago</th>
            <th>ID Dept</th>
            <th>Monto</th>
            <th>Monto Deuda</th>
            <th>Fecha de Pago</th>
            <th>Mes de Pago</th>
            <th>Comprobante</th>
            <th>Detalle</th>                            
        </tr>
    </thead>

    <tbody>
    
        <tr>           
            <td>{{$datosVERMAS->ID_pagos}}</td>
            <td>{{$datosVERMAS->ID_dept}}</td>
            <td>{{$datosVERMAS->Monto}}</td>
            <td>{{$datosVERMAS->Monto_deuda}}</td>
            <td>{{$datosVERMAS->Fecha_de_pago}}</td>
            <td>{{$datosVERMAS->Mes_de_pago}}</td> 
            <td><img src="{{asset('storage').'/'.$datosVERMAS->ComprobanteIMG}}" alt="" width="200"></td>   
            <td>{{$datosVERMAS->Detalle}}</td>               
            
        </tr>
    
    </tbody>

</table>