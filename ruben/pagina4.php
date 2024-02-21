<html>
<body>

	<?php

	$ch = curl_init();

	$url = "http://172.16.0.2:8000/plataformas_nombre/Netflix";

	curl_setopt($ch, CURLOPT_URL, $url);

	$response = curl_exec($ch);
	

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

	curl_close($ch);
	?>

</body>
</html>
