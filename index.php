<?php
    include('User.Controller.php');
    if(isset($_GET['class'])&&isset($_GET['method']))
{
    $class=$_GET['class'];
    $method=$_GET['method'];
    echo "Hola bueno dias";
}
else
{
 echo "Cargador";
}
?>

