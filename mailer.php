 <?php 

 //Destinataires

 $to = 'test.test@test.fr';

 //Objet

$subject = 'BLablabla';

//Message

$message = '<h1>Le texte en avant</h1><p>le texte en petit!!</p>';

//Entête

$headers = "From: The sender Name <andyh08440@gmail.com>\r\n";
$headers .= "Reply-To: andyh08440@gmail.com>\r\n";
$headers .= "Content-type: text/html\r\n";

//Envoie le mail
mail($to, $subject, $message, $headers);