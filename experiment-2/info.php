<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin-top: 20px;
  font-family: Arial, Helvetica, sans-serif;
  background-color: #f0f2f5;
  background-image:url("per.jpg");
  background-repeat:no-repeat;
  background-attachment:fixed;
  background-position:center center;
  background-size:cover;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
  font-size: 17px;
  height:25px;
  justify-content: center;
}

.topnav a:hover {
  background-color: skyblue;
  color: black;
}

.topnav a.active {
  background-color: blue;
  color: white;
}
.logout{
  justify-content: right;
  display: flex;
}
button{
  margin-bottom: 10px;
  padding: 8px 20px;
  align-self: center;
  background: #1877f2;
  border: none;    
  border-radius: 5px;
  color: #fff;
  font-size: 1rem;
  font-weight: bold;
}
button:hover{
  background: #196fe0;
}
</style>
</head>
<body>


<div class="topnav">
  <a href="index.php">Feed</a>
  <a href="post.php">Your posts</a>
  <a href="upload.php">upload</a>
  <a class="active" href="info.php">Personal Information</a>
  <a href="about.php">About</a>
  <div class="logout">
  <a href="logout.php"><button>logout</button></a>
</div>
</div>

<div style="padding-left:16px">
    <?php
        session_start();
        $con=mysqli_connect("localhost","root","","vinodphp");
        $eid=$_SESSION["email"];
        $phonenumber;
        $rows=mysqli_query($con,"select * from user where email='$eid'");
        echo "<center><br><br><table border=1 cellspacing=0 cellpadding=6 bgcolor=azure>";
        while($row=mysqli_fetch_array($rows))
        {
            echo "<tr><th>First Name</th><th>".$row["firstname"]."</th></tr>";
            echo "<tr><th>Last Name</th><th>".$row["lastname"]."</th></tr>";
            echo "<tr><th>DateOfBirth</th><th>".$row["dob"]."</th></tr>";
            echo "<tr><th>Email</th><th>".$row["email"]."</th></tr>";
            echo "<tr><th>Password</th><th>".$row["password"]."</th></tr>";
            echo "<tr><th>Phone Number</th><th>".$row["phonenumber"]."</th></tr>";
            echo "<tr><th>Address</th><th>".$row["address"]."</th></tr>";
        }
        echo "</center> </table>";
    ?>
</div>

</body>
</html>
