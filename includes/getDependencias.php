<?php
	
	require ('../conexion.php');
	
	$id_catalogo = $_POST['id_catalogo'];
	
	$queryM = "SELECT * FROM dependencias WHERE ramo = '$id_catalogo' ORDER BY nombreunidad asc";
	$resultadoM = $mysqli->query($queryM);
	
	$html= "<option value='0'>Selecciona la dependencia</option>";
	
	while($rowM = $resultadoM->fetch_assoc())
	{
		$html.= "<option value='".$rowM['id_dependencia']."'>".$rowM['nombreunidad']."</option>";
	}
	
	echo $html;
?>