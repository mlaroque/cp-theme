<?php

		$nombre = $_POST['nombre'];
		$email = $_POST['email'];
		$asunto = $_POST['asunto'];
		$mensaje = $_POST['mensaje'];

		$to      = 'hola@guiapaqueteria.com';
		$subject = 'Contacto guiapaqueteria: '. $asunto;
		$message = $mensaje;
		$headers = 'From: ' . $email . "\r\n" .
    		'Reply-To: no-reply@guiapaqueteria.com' . "\r\n" .
    		'X-Mailer: PHP/' . phpversion();

		$success = mail($to, $subject, $message, $headers);

		
		if($success){
			echo  "success";
		}else{
			echo "failed";
		}


?>