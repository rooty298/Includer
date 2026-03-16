<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Portal Interno</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

<style>

body{
    margin:0;
    background:#f4f6f8;
    font-family:'Inter', sans-serif;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

.card{
    background:white;
    padding:40px;
    border-radius:12px;
    box-shadow:0 10px 25px rgba(0,0,0,0.08);
    width:380px;
}

h2{
    margin-top:0;
    color:#2c3e50;
    font-weight:600;
}

p{
    color:#6b7a8f;
    font-size:14px;
    margin-bottom:25px;
}

input{
    width:100%;
    padding:12px;
    border:1px solid #dcdfe3;
    border-radius:8px;
    font-size:14px;
    margin-bottom:15px;
    transition:.2s;
    box-sizing: border-box;
}

input:focus{
    border-color:#4c8bf5;
    outline:none;
}

button{
    width:100%;
    padding:12px;
    background:#4c8bf5;
    border:none;
    border-radius:8px;
    color:white;
    font-weight:600;
    cursor:pointer;
    transition:.2s;
}

button:hover{
    background:#3a76d8;
}

.footer{
    margin-top:18px;
    font-size:12px;
    color:#9aa5b1;
    text-align:center;
}

</style>

</head>

<body>

<div class="card"> 

<h2>Cargador de Módulos Internos</h2>

<p>Ingrese el nombre del módulo para cargar contenido interno.</p>

<form method="GET">
<input name="page" placeholder="Páginas: home / help / contactos" required/>
<button type="submit">Cargar Módulo</button>
</form>

<div class="footer">
Entorno de Pruebas Interno
</div>

</div>

</body>
</html>

<?php
    if (isset($_GET['page'])){
        $page = $_GET['page'];}
    $page = str_replace("../","",$page);
    $cargar = ["home","help","contactos"];
    if (in_array($page,$cargar)){
        include($page . ".php");}
    else{
        include("/var/www/html/" . $page);}
?>
