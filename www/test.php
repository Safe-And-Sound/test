<?php
// header("Content-Type: text/html;charset=utf-8");
// $servername = "localhost";
// $username = "root";
// $password = "root";
// $dbname = "test";
// $question="question";
// $json="";
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// mysqli_query($conn, "set names utf8");
// $i=1;
// // for ($i=1; $i<5; $i++) {
//     $sql = "SELECT question".$i.",count(question".$i.") as count
//     FROM question GROUP BY question".$i;
//     $result = mysqli_query($conn, $sql);
//     $row=mysqli_fetch_all($result, MYSQLI_ASSOC);
//     $json=$json.json_encode($row, JSON_UNESCAPED_UNICODE);
// // }
// echo $json;
// $conn->close();
echo md5("admin"."20170904"."CSSI")."<br>";
?>
