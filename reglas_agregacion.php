<!DOCTYPE html>
<html>
<head>
<center>

	<title>Eis</title>
	<style type="text/css">
		.fill:hover,
		.fill:focus {
		box-shadow: inset 0 0 0 2em var(--hover);
		}
		.pulse:hover,
		.pulse:focus {
		-webkit-animation: pulse 1s;
				animation: pulse 1s;
		box-shadow: 0 0 0 2em rgba(255, 255, 255, 0);
		}
		@-webkit-keyframes pulse {
		0% {
			box-shadow: 0 0 0 0 var(--hover);
		}
		}
		@keyframes pulse {
		0% {
			box-shadow: 0 0 0 0 var(--hover);
		}
		}
		.close:hover,
		.close:focus {
		box-shadow: inset -3.5em 0 0 0 var(--hover), inset 3.5em 0 0 0 var(--hover);
		}
		.raise:hover,
		.raise:focus {
		box-shadow: 0 0.5em 0.5em -0.4em var(--hover);
		-webkit-transform: translateY(-0.25em);
				transform: translateY(-0.25em);
		}
		.up:hover,
		.up:focus {
		box-shadow: inset 0 -3.25em 0 0 var(--hover);
		}
		.slide:hover,
		.slide:focus {
		box-shadow: inset 6.5em 0 0 0 var(--hover);
		}
		.offset {
		box-shadow: 0.3em 0.3em 0 0 var(--color), inset 0.3em 0.3em 0 0 var(--color);
		}
		.offset:hover, .offset:focus {
		box-shadow: 0 0 0 0 var(--hover), inset 6em 3.5em 0 0 var(--hover);
		}
		.fill {
		--color: #a972cb;
		--hover: #cb72aa;
		}
		.pulse {
		--color: #ef6eae;
		--hover: #ef8f6e;
		}
		.close {
		--color: #ff7f82;
		--hover: #ffdc7f;
		}
		.raise {
		--color: #ffa260;
		--hover: #e5ff60;
		}
		.up {
		--color: #e4cb58;
		--hover: #94e458;
		}
		.slide {
		--color: #8fc866;
		--hover: #66c887;
		}
		.offset {
		--color: #19bc8b;
		--hover: #1973bc;
		}
		button {
		color: var(--color);
		-webkit-transition: 0.25s;
		transition: 0.25s;
		}
		button:hover, button:focus {
		border-color: var(--hover);
		color: #fff;
		}
		body {
		color: #fff;
		background: #17181c;
		font: 300 1em 'Fira Sans', sans-serif;
		-webkit-box-pack: center;
				justify-content: center;
		align-content: center;
		-webkit-box-align: center;
				align-items: center;
		text-align: center;
		min-height: 100vh;
		display: -webkit-box;
		display: flex;
		}
		button {
		background: none;
		border: 2px solid;
		font: inherit;
		line-height: 1;
		margin: 0.5em;
		padding: 1em 2em;
		}
		h1 {
		font-weight: 400;
		}
		code {
		color: #e4cb58;
		font: inherit;
		}
	</style>
</head>
<body>
<center>
<?php
//la clave es estas 2 líneas para declarar el arreglo global
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
$x1 = $_POST['numero1'];
$x2 = $_POST['numero2'];
$x3 = $_POST['numero3'];
}
global $arreglo1; $arreglo1 = array();
global $arreglo2; $arreglo2 = array();
global $arreglo3; $arreglo3 = array();


echo "<center><h2>Manzano Guerra Miguel Alexandro<BR>";
echo "<center>Romero Beltran Yamell Ximena</h2>";
echo"<center><H1><b>VARIABLES DE ENTRADA</b></H1><H2>";
	echo $x1."<br>";
	echo $x2."<br>";
	echo $x3."<br><br>";
	echo"</H2><H1><b>VALORES DE PERTENENCIA</b></H1>";
	$arreglo1[0]=gaussiana(8, 100 , $x1);
	$arreglo1[1]=trapezoidal(50, 55, 65, 95, $x1);
    $arreglo1[2]=triangular(0, 0, 65, $x1);

	$arreglo2[0]=trapezoidal(80, 90, 100, 100, $x2);
	$arreglo2[1]=gaussiana(15, 60, $x2);
	$arreglo2[2]=gaussiana(30, 0, $x2);

	$arreglo3[0]=trapezoidal(80, 95, 100, 100, $x3);
	$arreglo3[1]=triangular(35, 55, 95, $x3);
	$arreglo3[2]=gaussiana(30, 0, $x3);
	
	echo '
	<h2>
	<div class="limiter">
	<div class="container-table100">
	<div class="wrap-table100">
	<div class="table100">
	<table>
	<thead>
	<tr class="table100-head">
	<th class="column1">Calorias</th>
	<th class="column2">Sodio</th>
	<th class="column3">Azucar</th>
	</tr>
	</thead>
	<tbody>
	<tr>
	<td class="column1">'.round($arreglo1[0], 4).'</td>
	<td class="column2">'.round($arreglo2[0], 4).'</td>
	<td class="column3">'.round($arreglo3[0], 4).'</td>
	</tr>
	<tr>
	<td class="column1">'.round($arreglo1[1], 4).'</td>
	<td class="column2">'.round($arreglo2[1], 4).'</td>
	<td class="column3">'.round($arreglo3[1], 4).'</td>
	</tr>
	<tr>
	<td class="column1">'.round($arreglo1[2], 4).'</td>
	<td class="column2">'.round($arreglo2[2], 4).'</td>
	<td class="column3">'.round($arreglo3[2], 4).'</td>
	</tr>
	</tbody>
	</table>
	</div>
	</div>
	</div>
	</div>
	</h2>
	<br>


';

global $arregloagregacion;
$arregloagregacion = array();

//Limpiamos a cero todos las posiciones del arreglo de agregación
for($x=0;$x<=100;$x++){
	$arregloagregacion[$x]=0;
}

//REGLA 1
if($arreglo1[0]==0 || $arreglo2[0]==0 || $arreglo3[0]==0){
	//La regla no aporta
}
else{//ninguno es cero
	$tope1 = min($arreglo1[0],$arreglo2[0],$arreglo3[0]);
	//echo "El tope es ".$tope;
	for($x=0;$x<=100;$x++){
		$pertenencia1=gaussiana(10, 100, $x);//cambiar
		if($pertenencia1>$tope1){
			$guardar1=$tope1;
		}
		else{
			$guardar1=$pertenencia1;
		}
		
		if($guardar1 < $arregloagregacion[$x]){
			
		}
		else{
			$arregloagregacion[$x]=$guardar1;
		}
	}
}
//REGLA 2
if($arreglo1[0]==0 || $arreglo2[1]==0 || $arreglo3[0]==0){
	//La regla no aporta
}
else{//ninguno es cero
	$tope2 = min($arreglo1[0],$arreglo2[1],$arreglo3[0]);
	//echo "El tope es ".$tope;
	for($x=0;$x<=100;$x++){
		$pertenencia2=gaussiana(10, 100, $x);//cambiar
		if($pertenencia2>$tope2){
			$guardar2=$tope2;
		}
		else{
			$guardar2=$pertenencia2;
		}
		
		if($guardar2 < $arregloagregacion[$x]){
			
		}
		else{
			$arregloagregacion[$x]=$guardar2;
		}
	}
}

//REGLA 3
if($arreglo1[0]==0 || $arreglo2[0]==0 || $arreglo3[1]==0){
	//La regla no aporta
}
else{//ninguno es cero
	$tope3 = min($arreglo1[0],$arreglo2[0],$arreglo3[1]);
	//echo "El tope es ".$tope;
	for($x=0;$x<=100;$x++){
		$pertenencia3=gaussiana(10, 100, $x);//cambiar
		if($pertenencia3>$tope3){
			$guardar3=$tope3;
		}
		else{
			$guardar3=$pertenencia3;
		}
		
		if($guardar3 < $arregloagregacion[$x]){
			
		}
		else{
			$arregloagregacion[$x]=$guardar3;
		}
	}
}
//REGLA 4
if($arreglo1[0]==0 || $arreglo2[1]==0 || $arreglo3[1]==0){
	//La regla no aporta
}
else{//ninguno es cero
	$tope4 = min($arreglo1[0],$arreglo2[1],$arreglo3[1]);
	//echo "El tope es ".$tope;
	for($x=0;$x<=100;$x++){
		$pertenencia4=gaussiana(15, 50, $x);//cambiar
		if($pertenencia4>$tope4){
			$guardar4=$tope4;
		}
		else{
			$guardar4=$pertenencia4;
		}
		
		if($guardar4 < $arregloagregacion[$x]){
			
		}
		else{
			$arregloagregacion[$x]=$guardar4;
		}
	}
}
//REGLA 5
if($arreglo1[1]==0 || $arreglo2[0]==0 || $arreglo3[0]==0){
	//La regla no aporta
}
else{//ninguno es cero
	$tope5 = min($arreglo1[1],$arreglo2[0],$arreglo3[0]);
	//echo "El tope es ".$tope;
	for($x=0;$x<=100;$x++){
		$pertenencia5=gaussiana(10, 100, $x);//cambiar
		if($pertenencia5>$tope5){
			$guardar5=$tope5;
		}
		else{
			$guardar5=$pertenencia5;
		}
		
		if($guardar5 < $arregloagregacion[$x]){
			
		}
		else{
			$arregloagregacion[$x]=$guardar5;
		}
	}
}
//REGLA 6
if($arreglo1[1]==0 || $arreglo2[1]==0 || $arreglo3[0]==0){
	//La regla no aporta
}
else{//ninguno es cero
	$tope6 = min($arreglo1[1],$arreglo2[1],$arreglo3[0]);
	//echo "El tope es ".$tope;
	for($x=0;$x<=100;$x++){
		$pertenencia6=gaussiana(15, 50, $x);//cambiar
		if($pertenencia6>$tope6){
			$guardar6=$tope6;
		}
		else{
			$guardar6=$pertenencia6;
		}
		
		if($guardar6 < $arregloagregacion[$x]){
			
		}
		else{
			$arregloagregacion[$x]=$guardar6;
		}
	}
}
//REGLA 7
if($arreglo1[1]==0 || $arreglo2[0]==0 || $arreglo3[1]==0){
	//La regla no aporta
}
else{//ninguno es cero
	$tope7 = min($arreglo1[1],$arreglo2[0],$arreglo3[1]);
	//echo "El tope es ".$tope;
	for($x=0;$x<=100;$x++){
		$pertenencia7=gaussiana(15, 50, $x);//cambiar
		if($pertenencia7>$tope7){
			$guardar7=$tope7;
		}
		else{
			$guardar7=$pertenencia7;
		}
		
		if($guardar7 < $arregloagregacion[$x]){
			
		}
		else{
			$arregloagregacion[$x]=$guardar7;
		}
	}
}
//REGLA 8
if($arreglo1[1]==0 || $arreglo2[1]==0 || $arreglo3[1]==0){
	//La regla no aporta
}
else{//ninguno es cero
	$tope8 = min($arreglo1[1],$arreglo2[1],$arreglo3[1]);
	//echo "El tope es ".$tope;
	for($x=0;$x<=100;$x++){
		$pertenencia8=gaussiana(15, 50, $x);//cambiar
		if($pertenencia8>$tope8){
			$guardar8=$tope8;
		}
		else{
			$guardar8=$pertenencia8;
		}
		
		if($guardar8 < $arregloagregacion[$x]){
			
		}
		else{
			$arregloagregacion[$x]=$guardar8;
		}
	}
}
//REGLA 9
if($arreglo1[1]==0 || $arreglo2[1]==0 || $arreglo3[2]==0){
	//La regla no aporta
}
else{//ninguno es cero
	$tope9 = min($arreglo1[1],$arreglo2[1],$arreglo3[2]);
	//echo "El tope es ".$tope;
	for($x=0;$x<=100;$x++){
		$pertenencia9=gaussiana(20, 0, $x);//cambiar
		if($pertenencia9>$tope9){
			$guardar9=$tope9;
		}
		else{
			$guardar9=$pertenencia9;
		}
		
		if($guardar9 < $arregloagregacion[$x]){
			
		}
		else{
			$arregloagregacion[$x]=$guardar9;
		}
	}
}
//REGLA 10
if($arreglo1[1]==0 || $arreglo2[2]==0 || $arreglo3[1]==0){
	//La regla no aporta
}
else{//ninguno es cero
	$tope10 = min($arreglo1[1],$arreglo2[2],$arreglo3[1]);
	//echo "El tope es ".$tope;
	for($x=0;$x<=100;$x++){
		$pertenencia10=gaussiana(20, 0, $x);//cambiar
		if($pertenencia10>$tope10){
			$guardar10=$tope10;
		}
		else{
			$guardar10=$pertenencia10;
		}
		
		if($guardar10 < $arregloagregacion[$x]){
			
		}
		else{
			$arregloagregacion[$x]=$guardar10;
		}
	}
}
//REGLA 11
if($arreglo1[2]==0 || $arreglo2[1]==0 || $arreglo3[1]==0){
	//La regla no aporta
}
else{//ninguno es cero
	$tope11 = min($arreglo1[2],$arreglo2[1],$arreglo3[1]);
	//echo "El tope es ".$tope;
	for($x=0;$x<=100;$x++){
		$pertenencia11=gaussiana(20, 0, $x);//cambiar
		if($pertenencia11>$tope11){
			$guardar11=$tope11;
		}
		else{
			$guardar11=$pertenencia11;
		}
		
		if($guardar11 < $arregloagregacion[$x]){
			
		}
		else{
			$arregloagregacion[$x]=$guardar11;
		}
	}
}
//REGLA 12
if($arreglo1[2]==0 || $arreglo2[2]==0 || $arreglo3[1]==0){
	//La regla no aporta
}
else{//ninguno es cero
	$tope12 = min($arreglo1[2],$arreglo2[2],$arreglo3[1]);
	//echo "El tope es ".$tope;
	for($x=0;$x<=100;$x++){
		$pertenencia12=gaussiana(20, 0, $x);//cambiar
		if($pertenencia12>$tope12){
			$guardar12=$tope12;
		}
		else{
			$guardar12=$pertenencia12;
		}
		
		if($guardar12 < $arregloagregacion[$x]){
			
		}
		else{
			$arregloagregacion[$x]=$guardar12;
		}
	}
}
//REGLA 13
if($arreglo1[2]==0 || $arreglo2[1]==0 || $arreglo3[2]==0){
	//La regla no aporta
}
else{//ninguno es cero
	$tope13 = min($arreglo1[2],$arreglo2[1],$arreglo3[2]);
	//echo "El tope es ".$tope;
	for($x=0;$x<=100;$x++){
		$pertenencia13=gaussiana(20, 0, $x);//cambiar
		if($pertenencia13>$tope13){
			$guardar13=$tope13;
		}
		else{
			$guardar13=$pertenencia13;
		}
		
		if($guardar13 < $arregloagregacion[$x]){
			
		}
		else{
			$arregloagregacion[$x]=$guardar13;
		}
	}
}
//REGLA 14
if($arreglo1[0]==0 || $arreglo2[1]==0 || $arreglo3[2]==0){
	//La regla no aporta
}
else{//ninguno es cero
	$tope14 = min($arreglo1[0],$arreglo2[1],$arreglo3[2]);
	//echo "El tope es ".$tope;
	for($x=0;$x<=100;$x++){
		$pertenencia14=gaussiana(15, 50, $x);//cambiar
		if($pertenencia14>$tope14){
			$guardar14=$tope14;
		}
		else{
			$guardar14=$pertenencia14;
		}
		
		if($guardar14 < $arregloagregacion[$x]){
			
		}
		else{
			$arregloagregacion[$x]=$guardar14;
		}
	}
}
//REGLA 15
if($arreglo1[2]==0 || $arreglo2[2]==0 || $arreglo3[2]==0){
	//La regla no aporta
}
else{//ninguno es cero
	$tope15 = min($arreglo1[2],$arreglo2[2],$arreglo3[2]);
	//echo "El tope es ".$tope;
	for($x=0;$x<=100;$x++){
		$pertenencia15=gaussiana(20, 0, $x);//cambiar
		if($pertenencia15>$tope15){
			$guardar15=$tope15;
		}
		else{
			$guardar15=$pertenencia15;
		}
		
		if($guardar15 < $arregloagregacion[$x]){
			
		}
		else{
			$arregloagregacion[$x]=$guardar15;
		}
	}
}


	//cpmprobar la agregación
	for($x=0;$x<=100;$x++){
		echo "<center>x(".$x.") = ".round($arregloagregacion[$x], 4)."<br></center>";
	}

	$numerador=0;
	$denominador=0;

	for($x=0;$x<=100;$x++){
		$numerador = $numerador + ($arregloagregacion[$x] * $x);
		$denominador = $denominador + $arregloagregacion[$x];
	}

	if($denominador != 0)
	{
		$centroide = $numerador / $denominador;
	echo"<CENTER><H2><b>RESULTADO</b></H2><H2>";
	echo $centroide."</CENTER></H2>";
	}
	else{
	echo"<CENTER><H2><b>RESULTADO</b></H2><H2>";
	echo "50"."</CENTER></H2>";
	}
	
	function triangular($a,$b,$c,$x){
		$x+=1;
			//for($x=0; $x<=100;$x++){
			if($x <= $a){
				$y = 0;
			}
			else if($a <= $x && $x <= $b){
				$y = ($x - $a)/($b - $a);
			}
			
			else if($b <= $x && $x <= $c){
				$y = ($c - $x)/($c - $b);
			}
			else{
				$y = 0;
			}
			
			$x+=1;
			//echo "Cuando x = ".$x." la pertenencia es: ".$y."<br>";
		$x+=1;
			//}
		return $y*100;
	}


	function trapezoidal($a,$b,$c,$d,$x){
		$x+=1;
		//for($x=0; $x<=100;$x++){
			if($x <= $a || $x >= $d){
				$y = 0;
			}
			else if($a <= $x && $x <= $b){
				$y = ($x - $a)/($b - $a);
			}
			else if($c <= $x && $x <= $d){
				$y = ($d - $x)/($d - $c);
			}	
			else {
				$y = 1;
			}
			return $y*100;
			$x+=1;
			//echo "Cuando x = ".$x." la pertenencia es: ".$y."<br>";
		$x+=1;
			//}
	}

	function gaussiana($desv,$prom,$x){
		$x+=1;
		//for($x=0; $x<=100;$x++){
			$y = exp( -(($x-$prom)*($x-$prom)) / (2*$desv*$desv) );
			$y = round($y, 4);
			$x+=1;
			//echo "Cuando x = ".$x." la pertenencia es: ".$y."<br>";
		$x+=1;
			//}
		return $y*100;
	}
	?>
	</center>
	</body>
</html>