<?php
 $server ="remotemysql.com";// remote database
 $username="DshHNFZcBN";
 $password="CZnecs4YpG";
 $database="DshHNFZcBN";


 $con=mysqli_connect($server,$username,$password,$database);

 if(!$con)
 {
     die("connection to this database failed due to ".mysqli_connect_error());

 }
 else{
     echo " connection succeful";
 }
 $sql ="SELECT * FROM `user`";
 $result=mysqli_query($con,$sql);
 $num=mysqli_num_rows($result);
 while($num>0){
    // echo var_dump($row);
    $row = mysqli_fetch_assoc($result);
    echo $row['userid'] .  ". Hello ". $row['firstname'].$row['lastname'];
    echo "<br>";
    $num--;
}
?>