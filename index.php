<?php
// CONNEXION A LA BASE DONNEES
$user = 'root';

$passeword = '';


try 
{

	$db = new PDO ('mysql:host=localhost;dbname=evaluation', $user, $passeword);
	foreach ($db->query('SELECT * FROM etudiants') as $row) 
	{
		print_r($row);
	}
} 
catch (PDOException $e) 
{
	print "Erreur :" . $e->getMessage() . "<br/>";
	die;
}


?>