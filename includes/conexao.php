<?php 


 CONST host = "127.0.0.1:3307";
 CONST user = "root";
 CONST pass = "";
 CONST db = "base_llama";

$con = mysqli_connect(host, user, pass, db);


if (!$con) {

	die("Desculpe, não foi possível conectar");

}






?>