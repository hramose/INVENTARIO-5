<!DOCTYPE html>
<?php
session_start();
if($_SESSION["sesionOk"] != "si"){
    header("Location: index.php");
    exit;
}
?>
<html>
<head lang="es">
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/android.png"/>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css"/>
    <meta name="viewport" />
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display-->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">StockDroid<span class="glyphicon glyphicon-phone"></span></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling-->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li ><a href="super.php">Usuarios</a></li>
            <li ><a href="dispositivos.php">Dispositivos</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Listas<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="lista_dispo.php">Lista de dispositivos</a></li>
                    <li><a href="listaEjes.php">Lista de ejes</a></li>
                    <li><a href="listaTramos.php">Lista de tramos</a></li>
                    <li><a href="lista_marcas.php">Lista de marcas</a></li>
                    <li><a href="lista_componentes.php">Lista de componentes</a></li>

                </ul>
            </li>

            <li><a href="bitacora.php">Bitacora</a></li>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="controll/cerrarSesion.php">Cerrar Sesion</a></li>
            </ul>
    </div>
</nav> <!--FIn del nav-->
<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" ></script>
<script type="text/javascript">
/*Este script ayuda a modificar el hover del navbar dinamicamen*/
/*
$(".nav a").on("click", function(){
$(".nav").find(".active").removeClass("active");
$(this).parent().addClass("active");
});*/
</script>
<script src="js/jquery.js"></script>
<script src = "dist/js/bootstrap.js" ></script>
</body>
</html>
