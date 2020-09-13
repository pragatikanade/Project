<!DOCTYPE html>
<html lang="en">
<head>
<title>Article Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  /* background-color:skyblue; */
  /* background: radial-gradient(crimson, skyblue); */
  /* background-image: url("article.jpeg"); */
 }

/* Style the header */
.header {
  padding: 60px;
  text-align: center;
  background: radial-gradient(crimson, skyblue);
  /* background: #1abc9c; */
  color: white;
}

/* Increase the font size of the h1 element */
.header h1 {
  font-size: 40px;
}
p{
    font-size: 20px;
}

/* Style the top navigation bar */
.navbar {
  overflow: hidden;
  background-color: #333;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}
</style>
</head>
<body>

<div class="header">
  <h1>Welcome to GoodReads</h1>
  <p>A reader lives thousand lives before he dies.!</p>
</div>

<div class="navbar">
   <a href="logout.php" class="right">Logout</a>
</div>
<!-- <img src="article.jpeg"> -->

</body>
</html>

