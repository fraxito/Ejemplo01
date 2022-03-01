<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">

        </div>

        <div class="row">
        <div class="col-6">
<?php 
include('misfunciones.php');

$usuario = $_POST['usuario'];
$password = $_POST['password'];
echo "El nombre de usuario que has escrito es ".$usuario."<br>";
echo "y la contraseña que has escrito es ".$password."<br>";

$conexion = conectaBBDD();

// $consultaBienHecha = $conexion -> prepare("SELECT  email , sexo FROM 
//              usuariosalmacen WHERE `DNI`= ? AND `clave`= ? ");
// $consultaBienHecha -> bind_param("ss", $usuario, $password);
// $consultaBienHecha -> execute();
// $consultaBienHecha -> store_result();
// $consultaBienHecha -> bind_result( $email, $sexo );
// $consultaBienHecha -> fetch();
// if ($consultaBienHecha -> num_rows > 0){
//     echo ('
//             <div class="alert alert-success" role="alert">
//                 USUARIO Y CONTRASEÑA CORRECTOS, 
//                 el email es '.$email.'
//             </div>
//     ');
// }
// else{
//     echo ('
//             <div class="alert alert-danger" role="alert">
//                 USUARIO Y/O CONTRASEÑA INCORRECTOS
//             </div>
//     ');    
// }

// $consultaPrueba = $conexion -> query("SELECT * FROM usuariosAlmacen");
// $numeroFilas = $consultaPrueba -> num_rows;
// for ($i=0; $i < $numeroFilas; $i++){
//     $r = $consultaPrueba -> fetch_array(); //leo una fila del resultado de la query
//     echo 'usuario: '.$r['nombre'].' '.$r['DNI'].'<br>'; 
// }

$consultaMalHecha = $conexion -> query("SELECT * FROM 
            usuariosalmacen WHERE `DNI`='$usuario' AND `clave`='$password'");
            
if ($consultaMalHecha -> num_rows > 0){
    echo ('
            <div class="alert alert-success" role="alert">
                USUARIO Y CONTRASEÑA CORRECTOS
            </div>
    ');
}
else{
    echo ('
            <div class="alert alert-danger" role="alert">
                USUARIO Y/O CONTRASEÑA INCORRECTOS
            </div>
    ');    
}










?>
            </div>
        </div>
    </div>
</body>
</html>