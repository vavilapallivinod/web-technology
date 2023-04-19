<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin-top: 20px;
  font-family: Arial, Helvetica, sans-serif;
  background-color: #f0f2f5;  
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
#h{
  display:flex;
  margin-top:20px;
}
#r{
  margin-left:50px;
}
</style>
</head>
<body>


<div class="topnav">
  <a href="index.php">Feed</a>
  <a href="post.php">Your posts</a>
  <a href="upload.php">upload</a>
  <a href="info.php">Personal Information</a>
  <a class="active" href="about.php">About</a>
  <div class="logout">
  <a href="logout.php"><button>logout</button></a>
</div>
</div>

<div style="padding-left:16px" id="h">
    <img src="mark.WEBP" width="50%" height="60%" align="left">
    <div id="r">
      <img src="facebook.jpg">
    <h1 style="color:purple;">Facebook connects the world ! <br> Make healthy connections with people</h1>
</div>

</div>

</body>
</html>

