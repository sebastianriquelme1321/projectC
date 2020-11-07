<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th></th>
           
            <th>ID Pago</th>
            <th>ID Dept</th>
            <th>Monto</th>
            <th>Fecha de Pago</th>
            <th>Mes de Pago</th>
            <th>Comprobante</th>
            <th>Detalle</th>            
        </tr>
    </thead>

    <tbody>
    @foreach($pagos as $pago)
        <tr>
            
            <td>{{$loop->iteration}}</td>
           
            <td>{{$pago->ID_pagos}}</td>
            <td>{{$pago->ID_dept}}</td>
            <td>{{$pago->Monto}}</td>
            <td>{{$pago->Fecha_de_pago}}</td>
            <td>{{$pago->Mes_de_pago}}</td>
            <td>{{$pago->ComprobanteIMG}}</td>
            <td>{{$pago->Detalle}}</td>
            
            <td>
                <form method="post" action="{{url('/pagos/'.$pago->ID_pagos)}}">
                {{csrf_field() }}
                {{method_field('GET')}}
                <button type="submit">Ver mas</button>
                    
                </form>
            </td>
            <td>
                <a href="{{url('/pagos/'.$pago->ID_pagos.'/edit')}}">
                 <button type="submit" onclick="return confirm('Editar');">Editar</button>
                </a>

            <td>
            <td>
            <form method="post" action="{{url('/pagos/'.$pago->ID_pagos)}}">
            {{csrf_field() }}
            {{method_field('DELETE')}}
            <button type="submit" onclick="return confirm('Borrar');">Borrar</button>
                
            </form>
        </td>
        </tr>
    @endforeach
    </tbody>

</table>