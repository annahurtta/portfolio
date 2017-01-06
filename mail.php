<?php 
if (isset($_POST['Submit']))
{
$testi = array (
nimi=>$_POST['nimi'],
email=>$_POST['email'],
puhelinnumero=>$_POST['puhelin'],
viesti=>$_POST['viesti'],
);
foreach ($testi as $arvo)
{
if (empty($arvo))
{
die("Täytä kaikki tiedot, jotta saan yhteydenottosi <a 
href=yhteystiedot.php>Takaisin </a><br>");
}
}


// Read POST request params into global vars 
$to = "anna.hurtta@metropolia.fi"; 
$from = "Portfolio"; 
$subject = "Yhteydenotto nettisivujen kautta."; 
$nimi = $_POST['nimi']; 
$puhelinnumero = $_POST['puhelin'];
$email = $_POST['email'];
$viesti = $_POST['viesti'];


$message = "Yhteydenotto nettisivuilta: " . "\n\n".
	   "Nimi: " . $nimi . "\n".
	   "Email: " . $email . "\n".	
	   "Puh: " . $puhelinnumero . "\n".
	   "Viesti: " . "\n".
	   $viesti . "\n\n\n";

// Spam prevention
//if(eregi("MIME-Version: ",$to.$from.$subject.$etunimi.$fileatt)){die('Get out, spammer.');}

$headers = "From: $from"; 

// Send the message 
$ok = @mail($to, $subject, $message, $headers); 
if ($ok) {
echo "<p>Kiitos yhteydenotostasi</p> \n";


?>
<a href="./index.html" target="_self">Takaisin etusivulle</a><br>
<?
} else { 
echo "Virhe!";
} 
}
?>

