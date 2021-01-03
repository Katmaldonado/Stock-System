<?php 
    //error_reporting(0);
    session_start();

    //Conecta a la base de datos
    $db = mysqli_connect('127.0.0.1:3325', 'root', '', 'stock_system');
    
	// Inicia las variables
	$marca = "";
    $modelo = "";
    $version = "";
    $potencia = "";
    $cilindrada = "";
    $combustible = "";
    $transmision = "";
    $precio = "";
	$id = 0;
	$update = false;

    // Añade datos nuevos
	if (isset($_POST['save'])) {
		$marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $version = $_POST['version'];
        $potencia = $_POST['potencia'];
        $cilindrada = $_POST['cilindrada'];
        $combustible = $_POST['combustible'];
        $transmision = $_POST['transmision'];
        $precio = $_POST['precio'];

		mysqli_query($db, "INSERT INTO stock (marca, modelo, version, potencia, cilindrada, combustible, transmision, precio) VALUES ('$marca', '$modelo', '$version', '$potencia', '$cilindrada', '$combustible', '$transmision', '$precio')"); 
		$_SESSION['msg'] = "Vehículo agregado satisfactoriamente"; 
		header('location: index.php');
    }

    // Busca los datos para ser actualizados
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $update = true;
        $data = mysqli_query($db, "SELECT * FROM stock WHERE id=$id");

        if (@count($data) == 1 ) {
            $n = mysqli_fetch_array($data);
            $marca = $n['marca'];
            $modelo = $n['modelo'];
            $version = $n['version'];
            $potencia = $n['potencia'];
            $cilindrada = $n['cilindrada'];
            $combustible = $n['combustible'];
            $transmision = $n['transmision'];
            $precio = $n['precio'];
        }
    }

    // Actualiza los datos
	if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $version = $_POST['version'];
        $potencia = $_POST['potencia'];
        $cilindrada = $_POST['cilindrada'];
        $combustible = $_POST['combustible'];
        $transmision = $_POST['transmision'];
        $precio = $_POST['precio'];

        mysqli_query($db, "UPDATE stock SET marca='$marca', modelo='$modelo', version='$version', potencia='$potencia', cilindrada='$cilindrada', combustible='$combustible', transmision='$transmision', precio='$precio' WHERE id=$id");
        $_SESSION['msg'] = "Vehículo actualizado"; 
        header('location: index.php');
    }

    // Elimina los datos
    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM stock WHERE id=$id");
        $_SESSION['msg'] = "Vehículo eliminado"; 
        header('location: index.php');
    }

	$results = mysqli_query($db, "SELECT * FROM stock"); ?>