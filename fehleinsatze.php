<?php

header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, POST');

var express = require('express');
var app = express();

app.options('*', cors());

function writeData($sData, $sFilePath) {

	$sTargetFile = fopen($sFilePath, "a");

	fwrite($sTargetFile, $sData);
	fclose($sTargetFile);

}

if(isset($_POST['sData'])) {

	writeData($_POST['sData'], "testLog.txt");
	echo "done";

}
