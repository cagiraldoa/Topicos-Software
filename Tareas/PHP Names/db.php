<?php


if(!empty($_POST["Name"])){
$name = $_POST["Name"];


$conect = @mysqli_connect('localhost', 'root', '');

if($conect){

	$db = mysqli_select_db($conect, 'names');
}

if(!$db){

	$create = "CREATE DATABASE IF NOT EXISTS names CHARACTER SET utf8 COLLATE utf8_general_ci;";

	$msql__ = mysqli_query($conect, $create);


	$table = "CREATE TABLE IF NOT EXISTS `names`.`n_` ( `Name` VARCHAR(155) NOT NULL ) ENGINE = InnoDB";

	$msql___ = mysqli_query($conect, $table);


	$db = mysqli_select_db($conect, 'names');
}


$sql = "INSERT INTO n_(Name) VALUES('$name')";

$msql = mysqli_query($conect, $sql);

$get = "SELECT * FROM n_";

$msql_ = mysqli_query($conect, $get);
}

#while($names_ = mysqli_fetch_array($msql_)){

#echo $names_[0];
#}

?>