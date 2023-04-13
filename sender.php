<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $text = $_POST['text'];

	$to = "alexxguzhvin@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Заявка c сайта";

	
	$msg="
    Имя: $name /n
    Почта: $email /n
    Текст: $text"; 	
	mail($to, $subject, $msg, "From: $from ");

?>

<p class='text-send' style="display: flex;justify-content: center;align-items: center;height: 80vh;font-size: 36px;">The form has been sent, I will contact you shortly</p>
