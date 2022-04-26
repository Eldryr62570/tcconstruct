 <?php 

 //Destinataires

 $to = 'kyliancontactepro@gmail.com';

 //Objet

$subject = 'BLablabla';

//Message

$message = '<h1>Le texte en avant</h1><p>le texte en petit!!</p>';

//Entête

$headers = "From: The sender Name <kyliancontactepro@gmail.com>\r\n";
$headers .= "Reply-To: <kyliancontactepro@gmail.com>\r\n";
$headers .= "Content-type: text/html\r\n";

//Envoie le mail
mail($to, $subject, $message, $headers);
?>