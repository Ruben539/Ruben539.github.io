<?php

require_once("MSQLI.php");

$oMysql = new MYSQL();

$respuesta = "";
$rq = $_POST['rq'];

if($rq == 1){
	$respuesta = $oMysql->getDesembalado();
}elseif ($rq == 2) {
	$respuesta = $oMysql->getHerreria();
}elseif ($rq == 3) {
	$respuesta = $oMysql->getPintura();
}elseif ($rq == 4) {
	$respuesta = $oMysql->getRuedas();
}elseif($rq == 5) {
	$respuesta = $oMysql->getCinta();
}elseif($rq == 6) {
	$respuesta = $oMysql->getProbado();
}elseif($rq == 7) {
	$respuesta = $oMysql->getDeposito();
}elseif($rq == 8) {
	$respuesta = $oMysql->getCuatroR();
}elseif($rq == 9){
	$respuesta = $oMysql->getDesembalado_Lib();
}elseif ($rq == 10) {
	$respuesta = $oMysql->getHerreria_Lib();
}elseif ($rq == 11) {
	$respuesta = $oMysql->getPintura_Lib();
}elseif ($rq == 12) {
	$respuesta = $oMysql->getRuedas_Lib();
}elseif($rq == 13) {
	$respuesta = $oMysql->getCinta_Lib();
}elseif($rq == 14) {
	$respuesta = $oMysql->getProbado_Lib();
}elseif($rq == 15) {
	$respuesta = $oMysql->getDeposito_Lib();
}elseif($rq == 16) {
	$respuesta = $oMysql->getCuatroR_Lib();
}elseif($rq == 17) {
	$respuesta = $oMysql->getMiguel();
}elseif($rq == 18) {
	$respuesta = $oMysql->getPablo();
}elseif($rq == 19) {
	$respuesta = $oMysql->getDiego();
}elseif($rq == 20) {
	$respuesta = $oMysql->getMario();
}elseif($rq == 21) {
	$respuesta = $oMysql->getJunior();
}elseif($rq == 22) {
	$respuesta = $oMysql->getBrunos();
}elseif($rq == 23) {
	$respuesta = $oMysql->getJuan();
}elseif($rq == 24) {
	$respuesta = $oMysql->getHerminio();
}elseif($rq == 25) {
	$respuesta = $oMysql->getChamorro();
}
echo $respuesta;



