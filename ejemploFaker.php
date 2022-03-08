<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <div class="container-flex">
        <div class="row">
            <div class="col">
                <table class="table table-striped  table-hover  table-bordered">
                    <?php
                    
                    require_once 'src/autoload.php';
                    include('misfunciones.php');
                    $conexion = conectaBBDD();

                    $mifaker = Faker\Factory::create('es_ES');

                    for ($i = 0; $i<20; $i++) {
                        echo '<tr>';
                        echo '<td>'.$mifaker->name() . '</td>';
                        echo '<td>'.$mifaker->freeEmail() . '</td>';
                        echo '<td>'.$mifaker->dni() . '</td>';
                        echo '<td>'.$mifaker->mobileNumber() . '</td>';
                        echo '</tr>';
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>

</body>

</html>