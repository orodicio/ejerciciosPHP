<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<style type="text/css">
.general1 {
	border: 1px solid black;
	text-align: left;
	border-collapse: collapse;
	width: 64%;
	font-size: 20px;
	table-layout: fixed;
}

th {
	font-size: 25px;
	text-align: center;
	border-right: 1px solid black;
	padding-top: 1%;
}

.general2 {
	border: 1px solid black;
	text-align: left;
	border-collapse: collapse;
	font-size: 15px;
	width: 100%;
	table-layout: fixed;
}

.fila {
	border-collapse: collapse;
	border: 1px solid black;
}

.columna {
	border-collapse: collapse;
	border-right: 1px solid black;
	padding: 1% 1.5% 3.5% 1.5%;
	word-wrap: break-word;
}

.rojo {
	color: red;
}

.azul {
	color: blue;
	text-transform: capitalize;
}

.derecha {
	color: blue;
	padding-left: 67%;
}

.boton {
	padding: 1% 2% 1.5% 2%;
	border: 2px solid blue;
	border-radius: 8%;
	margin-left: 7%;
	width: 12%;
	height: auto;
	background-color: grey;
	font-weight: bolder;
}
</style>
<title>Vermes</title>
</head>
<body>
	<form method="post" name="fecha">
		<table class="general1">
			<tr>
				<th>Bienvenido<br /> al<br /> generador de calendarios:
				</th>
				<td rowspan="4" class="columna">
					<table class="general2">
						<tr class="fila">
<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET' || empty($_POST['año']) || empty($_POST['meses'])) {
    echo '<td colspan="7" class="columna">Mes:</td>
    </tr>
    <tr class="columna">
    <td class="columna">L</td>
    <td class="columna">M</td>
    <td class="columna">X</td>      
    <td class="columna">J</td>
    <td class="columna">V</td>
    <td class="columna">S</td>
    <td class="columna">D</td>
    </tr>';
    for ($j = 0; $j < 5; $j ++) {
        echo '<tr class="fila">';
        for ($z = 0; $z < 7; $z ++) {
            echo '<td class="columna"><br/></td>';
        }
        echo '</tr>';
    }
} else {
    $semana = [
        'monday' => 0,
        'tuesday' => 1,
        'wednesday' => 2,
        'thursday' => 3,
        'friday' => 4,
        'saturday' => 5,
        'sunday' => 6
    ];
    $meses = [
        'enero' => 1,
        'febrero' => 2,
        'marzo' => 3,
        'abril' => 4,
        'mayo' => 5,
        'junio' => 6,
        'julio' => 7,
        'agosto' => 8,
        'septiembre' => 9,
        'octubre' => 10,
        'noviembre' => 11,
        'diciembre' => 12
    ];
    $diasDeMeses = [
        'enero' => 31,
        'febrero' => 28,
        'marzo' => 31,
        'abril' => 30,
        'mayo' => 31,
        'junio' => 30,
        'julio' => 31,
        'agosto' => 31,
        'septiembre' => 30,
        'octubre' => 31,
        'noviembre' => 30,
        'diciembre' => 31
    ];

    $año = recoge('año');
    $año = (int) $año;
    $mesElegido = recoge('meses');
    $mes = $meses[$mesElegido];

    $fechaEnPHP = mktime(0, 0, 0, $mes, 1, $año);
    $diaDeLaSemana = strtolower(date('l', $fechaEnPHP));

    $inicioDeSemana = $semana[$diaDeLaSemana];
    $DiasDelMesElegido = $diasDeMeses[$mesElegido];

    echo <<< foo
<td colspan="7" class="columna">Mes:<span class="azul"> $mesElegido</span><span class="derecha">$año</span></td>
    </tr>
    <tr class="columna">
    <td class="columna">L</td>
    <td class="columna">M</td>
    <td class="columna">X</td>      
    <td class="columna">J</td>
    <td class="columna">V</td>
    <td class="columna">S</td>
    <td class="columna">D</td>
    </tr>
foo;
    $pintardias = 1;
    for ($j = 0; $j < 5; $j ++) {
        echo '<tr class="fila">';
        if ($j == 0) {
            if ($inicioDeSemana == 0) {
                for ($z = 0; $z < 7; $z ++) {
                    if ($z == 5 || $z == 6) {
                        echo '<td class= "columna rojo">' . $pintardias . '</td>';
                        $pintardias ++;
                    } else {
                        echo '<td class="columna">' . $pintardias . '</td>';
                        $pintardias ++;
                    }
                }
                echo '</tr>';
            } else {
                for ($z = 0; $z < $inicioDeSemana; $z ++) {
                    echo '<td class="columna"><br/></td>';
                }
                for ($z = $inicioDeSemana; $z < 7; $z ++) {
                    if ($z == 5 || $z == 6) {
                        echo '<td class= "columna rojo">' . $pintardias . '</td>';
                        $pintardias ++;
                    } else {
                        echo '<td class="columna">' . $pintardias . '</td>';
                        $pintardias ++;
                    }
                }
                echo '</tr>';
            }
        } else {
            if ($j == 4) {
                $diasQueFaltan = $DiasDelMesElegido - $pintardias;
                if ($diasQueFaltan >= 7) {
                    $diasQueFaltan = $diasQueFaltan + 1;
                    for ($z = 0; $z < 7; $z ++) {
                        if ($z == 5 || $z == 6) {
                            echo '<td class= "columna rojo">' . $pintardias . '</td>';
                            $pintardias ++;
                        } else {
                            echo '<td class="columna">' . $pintardias . '</td>';
                            $pintardias ++;
                        }
                        $diasQueFaltan --;
                    }
                    echo '</tr>';
                } else {
                    for ($z = 0; $z <= $diasQueFaltan; $z ++) {
                        if ($z == 5 || $z == 6) {
                            echo '<td class= "columna rojo">' . $pintardias . '</td>';
                            $pintardias ++;
                        } else {
                            echo '<td class="columna">' . $pintardias . '</td>';
                            $pintardias ++;
                        }
                    }
                    for ($z = $diasQueFaltan + 1; $z < 7; $z ++) {
                        echo '<td class="columna"><br/></td>';
                        $pintardias ++;
                    }
                    $diasQueFaltan = 0;
                    echo '</tr>';
                }
            } else {
                for ($z = 0; $z < 7; $z ++) {
                    if ($z == 5 || $z == 6) {
                        echo '<td class= "columna rojo">' . $pintardias . '</td>';
                        $pintardias ++;
                    } else {
                        echo '<td class="columna">' . $pintardias . '</td>';
                        $pintardias ++;
                    }
                }
                echo '</tr>';
            }
        }
    }

    if ($diasQueFaltan != 0) {
        for ($z = 0; $z < 1; $z ++) {
            echo '<tr class="fila">';
            for ($z = 0; $z < $diasQueFaltan; $z ++) {
                if ($z == 5 || $z == 6) {
                    echo '<td class= "columna rojo">' . $pintardias . '</td>';
                    $pintardias ++;
                } else {
                    echo '<td class="columna">' . $pintardias . '</td>';
                    $pintardias ++;
                }
            }
            for ($z = $diasQueFaltan; $z < 7; $z ++) {
                echo '<td class="columna"><br/></td>';
            }
            echo '</tr>';
        }
    }
}

function recoge($var)
{
    $tmp = (isset($_POST[$var])) ? trim(htmlspecialchars($_POST[$var], ENT_QUOTES, "UTF-8")) : "";
    return $tmp;
}
?>

					
					
					
					</table>
				</td>
			</tr>
			<tr>
				<td class="columna">Mes: <select name="meses">
						<option value=""></option>
						<option value="enero">Enero</option>
						<option value="febrero">Febrero</option>
						<option value="marzo">Marzo</option>
						<option value="abril">Abril</option>
						<option value="mayo">Mayo</option>
						<option value="junio">Junio</option>
						<option value="julio">Julio</option>
						<option value="agosto">Agosto</option>
						<option value="septiembre">Septiembre</option>
						<option value="octubre">Octubre</option>
						<option value="noviembre">Noviembre</option>
						<option value="diciembre">Diciembre</option>
				</select></td>
			</tr>
			<tr>
				<td class="columna">año: <select name="año">
						<option value=""></option>
<?php
for ($i = 2019; $i >= 1980; $i --) {
    echo '<option value=' . $i . '>' . $i . '</option>';
}
?>
</select>
				</td>
			</tr>
			<tr>
				<td class="columna"><input type="submit" value="Enviar"
					class="boton"></td>
			</tr>
		</table>
	</form>
</body>
</html>