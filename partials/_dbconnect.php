<<<<<<< HEAD
<?php
$server ="remotemysql.com";// remote database
$username="DshHNFZcBN";
$password="CZnecs4YpG";
$database="DshHNFZcBN";
$conn=mysqli_connect($server,$username,$password,$database);
if($conn)
{
    echo " succefully connected";
}
else{
    die("error".mysqli_connect_error());
}
=======
<?php
$server ="remotemysql.com";// remote database
$username="DshHNFZcBN";
$password="CZnecs4YpG";
$database="DshHNFZcBN";
$conn=mysqli_connect($server,$username,$password,$database);
if($conn)
{
    echo " succefully connected";
}
else{
    die("error".mysqli_connect_error());
}
>>>>>>> a79badb2ff5ab46d61a0c08457e92a300a0c1206
?>