<?php
$con=mysqli_connect("localhost","root","","vinodphp");
if(isset($_POST["submit"]))
{
    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $phonenumber=$_POST["phonenumber"];
    $dob=$_POST["dob"];
    $address=$_POST["address"];
}
    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $phonenumber=$_POST["phonenumber"];
    $dob=$_POST["dob"];
    $address=$_POST["address"];
    if(!$con)
    {
        echo "Not connected";
        die();
    }
    else{
        $sql="insert into user values('$phonenumber','$firstname','$lastname','$email','$password','$dob','$address')";
        $res=mysqli_query($con,$sql);
        if($res)
        {
            echo "<script>alert('new person registered')</script>";
        }
        else
        {
            echo "Not created";
        }
    }
?>