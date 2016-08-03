<?php

//require "getparam.php";



class db_connection {






}

CONST DB_HOST = "localhost";
CONST DB_LOGIN = "root";
CONST DB_PASSWORD = "";
CONST DB_NAME = "test_base";
CONST ORDERS_LOG = "orders.log";


$link = mysqli_connect(DB_HOST,DB_LOGIN,DB_PASSWORD,DB_NAME);

if(mysqli_connect_errno($link)>0) {
	file_put_contents("err.log", mysqli_connect_error($link), FILE_APPEND);
	die ("Сервер перегружен");
};


mysqli_query($link,"SET NAMES utf8");
$query = "SELECT p.id, p.title, p.photo, p.price, p.sale, f.path
FROM products p, files f
WHERE p.id=f.id";

$result = mysqli_query($link, $query);
//var_dump($result);


//echo "<table border='1'>";
//
//while ( $row = mysqli_fetch_array($result, MYSQL_ASSOC)){
//
//	echo "<tr>";
//	echo "<td>",$row["id"],"</td>";
//	echo "<td>",$row["title"],"</td>";
//	echo "<td>",$row["photo"],"</td>";
//	echo "<td>",$row["price"],"</td>";
//	echo "<td>",$row["sale"],"</td>";
//	echo "<td>",$row["path"],"</td>";
//	echo "</tr>";
//}
//echo "</table>";




mysqli_close($link);
?>