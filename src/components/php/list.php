<?php
	//Info base
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "rtlry";
$db = "mail";
$Liste="";
$Message="";
$mail = array();
try
{
	$bdd = new PDO('mysql:host=localhost;dbname='.$db.';charset=utf8', $dbuser, $dbpass);
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}
if (isset($_GET["user"]))
{
	$user = $_GET["user"];
	$stmt1 = $bdd->prepare("SELECT * FROM donnee WHERE destinataire=(:destinataire2)");
	$stmt1->bindParam('destinataire2', $_GET["user"]);
	$stmt1->execute();
	while ($donnees = $stmt1->fetch())
	{		
		array_push($mail, array('id' =>$donnees["id"],
								'date' => $donnees["date"], 
								'expediteur' =>$donnees["expediteur"], 
								'destinataire' => $donnees["destinataire"], 
								'message' =>$donnees['message']));
	}
	header('Content-Type: application/json'); 
	header("Access-Control-Allow-Origin: *");
	$myJSON = json_encode($mail);
	echo $myJSON;
}
?>