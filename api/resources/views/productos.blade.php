<!DOCTYPE html>
<html>
<head>
    <title>Productos</title>
</head>
<center>
<body bgcolor="pink">
    <h2>Productos</h2>
    <table border="1" bgcolor="teal">
        <tr>
           <th>ID</th>
           <th>Clave</th>
           <th>Producto</th>
           <th>Existencias</th>
           <th>Precio Unitario</th>
           <th>Unidad de medida</th>
           <th>Estatus</th>
        </tr>
    @foreach($prods as $pd)
    <tr>
         <td>{{$pd->id}}</td> 
         <td>{{$pd->clave}}</td>
         <td>{{$pd->producto}}</td>
         <td>{{$pd->existencias}}</td>
         <td>{{$pd->precio_unitario}}</td>
         <td>{{$pd->unidad_de_medida}}</td>
         <td>{{$pd->estatus}}</td>
    </tr>
    @endforeach 
    </table>    
</body>
</center>
</html>