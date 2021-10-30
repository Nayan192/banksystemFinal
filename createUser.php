<?php
    $insert=false;
    if(isset($_POST['firstname'])){

    // $server ="localhost";
    // $username="root";
    // $password="";
    $server ="remotemysql.com";// remote database
    $username="DshHNFZcBN";
    $password="CZnecs4YpG";


    $con=mysqli_connect($server,$username,$password);

    if(!$con)
    {
        die("connection to this database failed due to ".mysqli_connect_error());

    }


    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $age=$_POST['age'];
    $gender =$_POST['gender'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $city=$_POST['city'];
    $sql ="INSERT INTO `DshHNFZcBN`. `user` ( `userid`,`firstname`, `lastname`, `age`, `gender`, `phone`, `email`, `city`,`date`) VALUES ( NULL,'$firstname', '$lastname', '$age', '$gender', '$phone', '$email', '$city', CURRENT_TIMESTAMP); "; 
  
    if($con->query($sql)==true)
    {
        $insert=true;
        // echo " succesfully inserted";
    }
    else
    {
        echo "error $sql<br> $con->error";
    }
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/createUser.css">
    <title>Document</title>
</head>
<body>
    <?php
            if($insert==true)
            {
                echo  "<p>Welcome OnBoard </p>";
            }
    ?>
    <div class="background">
    <h1 class="mainheading">CREATE NEW USER</h1><br>
    <form class="createUserform" method="post">
        <label><b>First Name</b> </label><br>
        <input class="createUser-control" type="text" name="firstname" id="firstname"required><br><br>
        <label><b>Last Name</b> </label><br>
        <input class="createUser-control" type="text" name="lastname" id="lastname"  required><br><br>
        <label><b>Age</b> </label><br>
        <input class="createUser-control" type="age" name="age" id="age"  required><br><br>
        <label><b>Gender</b> </label><br>
        <input class="createUser-control" type="text" name="gender" id="gender"  required><br><br>
        <label><b>Phone Number</b> </label><br>
        <input class="createUser-control" type="phone" name="phone" id="phone" required><br><br>
        <label><b>Email</b> </label><br>
        <input class="createUser-control" type="email" name="email" id="email" required><br><br>
        <label><b>City </b> </label><br>
        <input class="createUser-control" type="city" name="city" id="city" required><br><br>
        <button class="submit-button">Submit</button>
    </form>
</div>
</body>
</html>
