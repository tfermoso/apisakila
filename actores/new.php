<?php
if(isset($_POST["name"]) && $_POST["lastname"]){

include("../conexiondb.php");
$sql="select actor_id,first_name,last_name from actor where first_name=:first_name";
$stm=$conexion->prepare($sql);
$stm->bindParam(":first_name",$_GET['name']);
$stm->execute();
$datos=$stm->fetchAll(PDO::FETCH_ASSOC);
$json=json_encode($datos);
// Establece la cabecera para indicar que la respuesta es JSON

}
else{
    $response=[
        'status'=> '200',
        'message'=> 'No se han recibido los datos necesarios'
    ];
    $json= json_encode($response);
}
header('Content-Type: application/json');
echo $json;
?>