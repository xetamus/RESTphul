<?php
require "lib/restAPI.php";

$API = new restAPI($_GET['request']);

if ( !$API->response ) {
    $API->processRequest();
}

echo $API->response;

?>
