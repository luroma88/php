<?php
$aProductos = array();
$aProductos[] = array(
    "nombre" => "Smart TV 55\" 4K UHD",
    "marca" =>"Hitachi",
    "modelo" =>"554KS20",
    "stock" =>"80",
    "precio" =>"58000",
);
$aProductos[] = array(
    "nombre" => "Samsung Galaxy A30 Blanco",
    "marca" =>"Samsung",
    "modelo" =>"Galaxy A30",
    "stock" =>"0",
    "precio" =>"58000",
);
$aProductos[] = array(
    "nombre" => "Aire acondicionado split F/C Surrey 2900F",
    "marca" => "Surrey",
    "modelo" => "553AIQ1201E",
    "stock" => "8",
    "precio" => "58000",
);
$aProductos[] = array(
    "nombre" => "Impresora HP laser",
    "marca" =>"HP",
    "modelo" =>"P1102W",
    "stock" =>"66",
    "precio" =>"58000",
);


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listadoProductos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Listado de Productos</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover border">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Stock</th>
                                <th>Precio</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            for ($i = 0; $i < count($aProductos); $i++) {
                                echo "<tr>";
                                echo "<td>" . $aProductos[$i]["nombre"] . "</td>";
                                echo "<td>" . $aProductos[$i]["marca"] . "</td>";
                                echo "<td>" . $aProductos[$i]["modelo"] . "</td>";
                                echo "<td>" . $aProductos[$i]["stock"] > 10 ? "Hay stock" : ($aProductos["stock"][$i] == 0 && $aProductos["stock"][$i] <= 10 ? "No hay stock" : "Hay poco stock") . "</td>";
                                echo "<td> $" .  $aProductos[$i]["precio"] . "</td>";
                                echo "<td>" .  "<button class=\"btn btn-primary\">Comprar</button></td>"; //le coloco las barras antes de las comillas para que queden dentro de class
                                echo "</tr>";
                                $subtotal += $aProductos[$i]["precio"];
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h3>El subtotal es $ <?php echo $subtotal; ?></h3>


                </div>

            </div>

        </div>

    </main>
</body>

</html>