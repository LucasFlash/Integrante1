
<!--Consigna:
Desarrolle una pagina en la cual se puedan 
obtener aleatoriamente diversos apellidos-->

<!-- Vamos a agregar una mejora a la página del Integrante 1, a través de la introduccion de nombres aleatorios . Firma: Integrante 2 -->

<!DOCTYPE HTML>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Apellidos y Nombres Europeos</title>
</head>
<body>
<H3>Generador Aleatorio de Apellidos y Nombres Europeos</H3>  <H1>Ingrese el numero según el país:</H1>
<form action="Codigo1.php" method="POST">
	<table>
	<tr> <td>1: Espana | 2: Italia | 3: Alemania | 4: Francia</td> </tr>
	<tr> <td> <input type="text" name="num1"> </td> </tr>
    <tr> <td> <input type="submit" value="Generar"> </td> </tr>
</table>
</form>
</body>
</html>
<?php
	if($_POST)
        {	
        $Apellido=array("Garcia", "Rodriguez", "Fernandez", "Lopez", "Sanchez", "Gomez", "Perez", "Gonzales", "Hernandez", "Martinez", "Rossi", "Mancini", "Ferrari","Esposito", "Bianchi", "Romano", "Colombo", "Ricci", "Marino", "Greco", "Muller", "Schmidt", "Schneider", "Fischer", "Weber", "Meyer", "Wagner", "Becker", "Schulz", "Hoffmann",
             "Petit", "Laurent", "Moreau", "Flambeu", "Rousseau", "Blanc", "Matheiu", "Clement", "Monet", "Francois");
         $num = $_POST['num1'];
         if ($num < 1) {echo "Error, vuelva a intentar";}
            	else { if ($num > 4) {echo "Error, vuelva a intentar";} 
                   else {$s0 = rand(0,9); $p0 = (10 * ( $num - 1) ) + $s0 ;
	                       echo  $Apellido[$p0];
	    
	    }}}
?>