<html>
<body>

	<?php

	$ch = curl_init();

	$baseUrl = "http://172.16.0.2:8000/actoresPorNombre?";

	$parametros = http_build_query(array(
		'search'  => 'Andrew'
	));

	$url = $baseUrl . $parametros;

	curl_setopt($ch, CURLOPT_URL, $url); //Establece la URL para la solicitud

	$response = curl_exec($ch);
	curl_close($ch);

	$responseData = json_decode($response, true);

	echo $responseData;

	if (curl_errno($ch)){
		//Manejar error de cURL
		echo 'Error de cURL: ' . curl_error($ch);
	} elseif ($response === false){
		//Manejar error de respuesta vacía
		echo 'Error en la respuesta: La respuesta está vacía';
	} else {
		//Procesar respuesta
	}

	?>

</body>
</html>
