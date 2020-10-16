<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

require_once "modelo/CuentaCorriente.php";

$prov1=new Proveedor;

$prov1->RazonSocial="Adidas";
$prov1->CUIT="20-12345678-9";
$prov1->Email="adidas@adidas.com";

$cueCor1=new CuentaCorriente;

$cueCor1->NroCuentaCorriente=2;
$cueCor1->Saldo="$1000";
$cueCor1->Proveedor=$prov1;

$prov2=new Proveedor;

$prov2->RazonSocial="Nike";
$prov2->CUIT="20-123454678-9";
$prov2->Email="nike@nike.com";

$cueCor2=new CuentaCorriente;

$cueCor2->NroCuentaCorriente=2;
$cueCor2->Saldo="-$1000";
$cueCor2->Proveedor=$prov2;

$prov3=new Proveedor;

$prov3->RazonSocial="New Balance";
$prov3->CUIT="20-123456878-9";
$prov3->Email="newBalance@newBalance.com";

$cueCor3=new CuentaCorriente;

$cueCor3->NroCuentaCorriente=2;
$cueCor3->Saldo="$2000";
$cueCor3->Proveedor=$prov3;

$prov4=new Proveedor;

$prov4->RazonSocial="Topper";
$prov4->CUIT="20-123545678-9";
$prov4->Email="topper@topper.com";

$cueCor4=new CuentaCorriente;

$cueCor4->NroCuentaCorriente=2;
$cueCor4->Saldo="-$2000";
$cueCor4->Proveedor=$prov4;

$listaDeCuentas = array();
$listaDeCuentas[]=$cueCor1;
$listaDeCuentas[]=$cueCor2;
$listaDeCuentas[]=$cueCor3;
$listaDeCuentas[]=$cueCor4;

echo json_encode($listaDeCuentas);