<?php
$aProductos = array();
$aProductos["electrodomestico"] = array("Smart TV 55' 4K UHD", "Samsung Galaxy A30 Blanco","Aire acondicionado split F/C Surrey 2900F");
$aProductos["marca"]=array("Hitachi", "Samsung","Surrey");
$aProductos["modelo"]=array("554KS20","Galaxy A30", "553AIQ1201E");
$aProductos["stock"]=array("Hay stock","Poco stock","Sin stock");
$aProductos["precio"]=array("$60000","$45000","$38000");

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
                    <tr>
                        <td><?php echo $aProductos["electrodomestico"][0]?></td>
                        <td><?php echo $aProductos["marca"][0]?></td>
                        <td><?php echo $aProductos["modelo"][0]?></td>
                        <td><?php echo $aProductos["stock"][0]?></td>
                        <td><?php echo $aProductos["precio"][0]?></td>
                        <td><button class="btn btn-primary">Comprar </button></td>
                    </tr>
                    <tr>
                        <td><?php echo $aProductos["electrodomestico"][1]?></td>
                        <td><?php echo $aProductos["marca"][1]?></td>
                        <td><?php echo $aProductos["modelo"][1]?></td>
                        <td><?php echo $aProductos["stock"][1]?></td>
                        <td><?php echo $aProductos["precio"][1]?></td>
                        <td><button class="btn btn-primary">Comprar </button></td>
                    </tr>
                    <tr>
                        <td><?php echo $aProductos["electrodomestico"][2]?></td>
                        <td><?php echo $aProductos["marca"][2]?></td>
                        <td><?php echo $aProductos["modelo"][2]?></td>
                        <td><?php echo $aProductos["stock"][2]?></td>
                        <td><?php echo $aProductos["precio"][2]?></td>
                        <td><button class="btn btn-primary">Comprar</button></td> 
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
        </div>

    </main>
</body>
</html>