<?php
include ("../class/ClassFipe.php");
$objFipe=new ClassFipe();
$action=$_GET['action'];
if(isset($_GET['brandId'])){$brandId=$_GET['brandId'];}else{$brandId=null;}
if(isset($_GET['vehicleId'])){$vehicleId=$_GET['vehicleId'];}else{$vehicleId=null;}


if($action=='brand'){
    $objFipe->setUrl("https://parallelum.com.br/fipe/api/v1/carros/marcas");
    echo $objFipe->getUrl();
}elseif($action=='vehicles'){
    $objFipe->setUrl("https://parallelum.com.br/fipe/api/v1/carros/marcas/{$brandId}/modelos");
    echo $objFipe->getUrl();
}elseif($action=='year'){
    $objFipe->setUrl("https://parallelum.com.br/fipe/api/v1/carros/marcas/{$brandId}/modelos/{$vehicleId}/anos");
    echo $objFipe->getUrl();
}