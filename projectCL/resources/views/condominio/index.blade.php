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
    @foreach($Condominios as $condominio)
        <tr>
            
            <td>{{$loop->iteration}}</td>
           
            <td>{{$condominio->ID_condominio}}</td>
            <td>{{$condominio->Region}}</td>
            <td>{{$condominio->Ciudad}}</td>
            <td>{{$condominio->Calle}}</td>
            <td>{{$condominio->Numero}}</td>
            <td>{{$condominio->ID_ad}}</td>
            <td>{{$condominio->Rut_ad}}</td>
            <td>{{$condominio->Ver_ad}}</td>
            <td>{{$condominio->Nombre}}</td>
            <td>{{$condominio->Apellido}}</td>
            <td>{{$condominio->Fono}}</td>
            <td>{{$condominio->Correo}}</td>
            <td>{{$condominio->Password}}</td>
            <td>
                <form method="post" action="{{url('/condominio/'.$condominio->ID_condominio)}}">
                {{csrf_field() }}
                {{method_field('GET')}}
                <button type="submit">Ver mas</button>
                    
                </form>
            </td>
            <td>
                <a href="{{url('/condominio/'.$condominio->ID_condominio.'/edit')}}">
                 <button type="submit" onclick="return confirm('Editar');">Editar</button>
                </a>

            <td>
            <td>
            <form method="post" action="{{url('/condominio/'.$condominio->ID_condominio)}}">
            {{csrf_field() }}
            {{method_field('DELETE')}}
            <button type="submit" onclick="return confirm('Borrar');">Borrar</button>
                
            </form>
        </td>
        </tr>
    @endforeach
    </tbody>

</table>