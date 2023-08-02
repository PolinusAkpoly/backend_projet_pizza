
<?php 
header("Content-type: application/json");
header("Access-Control-Allow-Origin: *");
require_once("../db/pizzas.php");

$pizza_to_json = json_encode($pizzas);

// var_dump($pizza_to_json);
echo $pizza_to_json;

?>






