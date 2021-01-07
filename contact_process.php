<?php

    $to = "maite10597@gmail.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $subject = $_REQUEST['subject'];
    $number = $_REQUEST['number'];
    $cmessage = $_REQUEST['message'];

    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	// $subject = "Tienes un mensaje de Costa Dulce.";
	// $cmessage = "Ferretería
	// Contamos con la más amplia variedad de productos de ferretería, para que pueda tener todo lo necesario para tus obras.
	
	// Instalaciones eléctricas
	// Nuestras instalaciones eléctricas son hechas por profesionales de primer nivel. Por ende, podemos garantizar calidad y seguridad en nuestros trabajos.
	// Los materiales que utilizamos son al mejor precio sin descuidar la calidad, de manera que usted pueda cuidar su economía.
	
	// Plomería
	// Hacemos importantes trabajos de cañería, enfocándonos principalmente en el usuario final, para que no tenga inconvenientes en su calidad de vida, ni la presente ni la futura.
	// Detectamos todo tipo de problemas en las edificaciones ya establecidas y nos aseguramos de que estos inconvenientes no ocurran de nuevo.
	
	// Estructuras metálicas
	// Realizamos trabajos de herrería, que varían desde tinglados hasta cualquier tipo de estructuras metálicas.
	
	// Proyectos de Arquitectura
	// Nuestros arquitectos han y siguen haciendo proyectos que impactan enormemente en el resultado final. Buscan satisfacer al cliente, plasmando sus ideas y combinandolas con sus conocimientos y experiencias.
	// El resultado es una verdadera obra arquitectónica que no tiene precedentes.";

    $logo = 'https://www.costadulce.com.py/assets/img/logo/header-logo-white-transp.png';
    $link = '#';

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
	$body .= "</td></tr></thead><tbody><tr>";
	$body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
	$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
	$body .= "</tr>";
	$body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$csubject}</td></tr>";
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";

    $send = mail($to, $subject, $body, $headers);

?>