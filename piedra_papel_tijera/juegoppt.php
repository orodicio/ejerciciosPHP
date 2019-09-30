<html>
<head>
<title>Piedra_papel_tijera</title>
</head>
<body>
	<?php
	define('PIEDRAIZQ', "&#x1F91C" );
	define('PAPEL', "&#x1F91A");
	define('TIJERA', "&#x1F596");
	define('PIEDRADER', "&#x1F91B" );
	
	function tirada($piedra,$papel,$tijera)
	{
	    $player=random_int(1,3);
	    
	    if ($player == 1){
	        return $piedra;
	    }
	    if ($player == 2){
	        return $papel;
	    }
	    return $tijera;
	    
	}

	$jugador1 = tirada (PIEDRAIZQ,PAPEL,TIJERA);
	$jugador2 = tirada (PIEDRADER,PAPEL,TIJERA);
	
	function hallarGanador ($j1,$j2){
	    
	    
	    if (($j1 == $j2) || (($j1 == PIEDRAIZQ) && ($j2 == PIEDRADER))){  
	        return "¡¡¡Empate!!!";
	    }
	    if((($j1== PIEDRAIZQ) && ($j2 == TIJERA)) || (($j1== TIJERA) && ($j2 == PAPEL)) || (($j1== PAPEL) && ($j2 == PIEDRADER))){
	        return "¡Ha ganado el jugador 1!";
	    }
	        if((($j2== PIEDRADER) && ($j1 == TIJERA)) || (($j2== TIJERA) && ($j1 == PAPEL)) || (($j2== PAPEL) && ($j1 == PIEDRAIZQ))){
	        return "¡Ha ganado el jugador 2! ";
	}
	}
	
	$resultado = hallarGanador($jugador1, $jugador2);
	echo <<<FOO
        <h1>¡Piedra, papel, tijera!</h1>

    <p>Actualice la página para mostrar otra partida.</p>

    <table>
      <tr>
        <th>Jugador 1</th>
        <th>Jugador 2</th>
      </tr>
      <tr>
        <td><span style="font-size: 7rem">$jugador1;</span></td>
        <td><span style="font-size: 7rem">$jugador2;</span></td>
      </tr>
      <tr>
        <th colspan="2">$resultado</th>
      </tr>
    </table>
FOO
?>


</body>
</html>