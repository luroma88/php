<?php
$aPacientes = array();
$aPacientes[] = array(
    "dni" => "33.765.012",
    "nombre" => "Ana Acuña",
    "edad" => "45",
    "peso" => "81.5"
);
$aPacientes[] = array(
    "dni" => "23.684.385",
    "nombre" => "Gonzalo Bustamante",
    "edad" => "66",
    "peso" => "80"
);
$aPacientes[] = array(
    "dni" => "33.484.922",
    "nombre" => "Lucas Romano",
    "edad" => "33",
    "peso" => "67"
);
$aPacientes[] = array(
    "dni" => "17.045.589",
    "nombre" => "Susana Pachi",
    "edad" => "57",
    "peso" => "56"
);
$aPacientes[] = array(
    "dni" => "37.134.325",
    "nombre" => "Cristian Cash",
    "edad" => "25",
    "peso" => "69"
);

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listadoPacientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5">
                <h1>Listado de Pacientes</h1>

            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover border">
                        <tr>
                            <th>DNI</th>
                            <th>Nombre</th>
                            <th>Edad</th>
                            <th>Peso</th>
                        </tr>


                        <?php
                        foreach ($aPacientes as $pos => $paciente) {
                            echo "<tr>";
                            echo "<td>" . $paciente["dni"] . "<br>" . "</td>";
                            echo "<td>" . $paciente["nombre"] . "<br>" . "</td>";
                            echo "<td>" . $paciente["edad"] . "<br>" . "</td>";
                            echo "<td>" . $paciente["peso"] . "<br>" . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </table>
                </div>

            </div>

        </div>
    </main>
</body>