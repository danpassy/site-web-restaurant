<?php
/**
* 
*/
class Apiclient 
{
 
    public function Donnee()
{

// URL de l'API
$url = "http://test.api.catering.bluecodegames.com/menu";

// Données à envoyer sous forme de JSON
$data = array('id_shop' => '1');
$json_data = json_encode($data);

// Configuration de la requête POST
$options = array(
    'http' => array(
        'method' => 'POST',
        'header' => 'Content-Type: application/json',
        'content' => $json_data
    )
);

// Envoi de la requête
$context = stream_context_create($options);
$response = file_get_contents($url, false, $context);
($response);
$r=json_decode($response,true);


// Affichage des données récupérées
return $r;



}
}

