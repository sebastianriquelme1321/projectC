<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th></th>

            <th>ID condominios</th>
            <th>Region</th>
            <th>Ciudad</th>
            <th>Calle</th>
            <th>Número</th>
            <th>Id Administrador</th>
            <th>rut </th>
            <th> </th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fono</th>
            <th>Correo</th>
            <th>Password</th>
            <th>Bloque</th>
        </tr>
    </thead>

    <tbody>
    
        <tr>          

            <td>{{$datosVERMAS->ID_condominio}}</td>
            <td>{{$datosVERMAS->Region}}</td>
            <td>{{$datosVERMAS->Ciudad}}</td>
            <td>{{$datosVERMAS->Calle}}</td>
            <td>{{$datosVERMAS->Numero}}</td>
            <td>{{$datosVERMAS->ID_ad}}</td>
            <td>{{$datosVERMAS->Rut_ad}}</td>
            <td>{{$datosVERMAS->Ver_ad}}</td>
            <td>{{$datosVERMAS->Nombre}}</td>
            <td>{{$datosVERMAS->Apellido}}</td>
            <td>{{$datosVERMAS->Fono}}</td>
            <td>{{$datosVERMAS->Correo}}</td>
            <td>{{$datosVERMAS->Password}}</td>
            
            
        </tr>
   
    </tbody>

</table>