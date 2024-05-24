<?php
function connection(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mmashop";

    $connect=mysqli_connect($servername,$username,$password);

    mysqli_select_db($connect,$dbname);

    


    return $connect;

}