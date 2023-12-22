<?php 

require "../controller/Application_Controller.php";
use Application_Controller\Application_Controller; 


// $nome = $_POST['nome'];
// $email = $_POST['email'];
// $mensagem = $_POST['mensagem'];


$nome = "Arthur";
$email = "arthur@gmail.com";
$mensagem = "olá asdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasd";



$enviar = new Application_Controller($nome,$email,$mensagem);




?>