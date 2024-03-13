<?php
include("../class/classFipe.php.");
$objFipe=new classFipe();
$action=$_GET['action'];
if(isset($_GET['marca'])){
    $marca=$_GET['marca'];
}else{
    $marca=null;
}


if(isset($_GET['modelo'])){
    $marca=$_GET['modelo'];
}else{
    $marca=null;
}

if(isset($_GET['ano'])){
    $marca=$_GET['ano'];
}else{
    $marca=null;
}

if(isset($_GET['valor'])){
    $marca=$_GET['valor'];
}else{
    $marca=null;
}

if($action=='marca'){
    $objFipe->geturl(url:"https://parallelum.com.br/fipe/api/v1/carros/marcas");
echo$objFip->geturl();
}

