<?php
include 'mainpage.php';?>
<html>
<head>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="home.css">

</head>

<body>
    <?php
include 'connection.php';
    $name=$_SESSION['sname'];

    $result=$mysqli->query("SELECT * FROM article")or die(mysqli_error($mysqli));
    // $result=$mysqli->query("SELECT * FROM article")or die(mysqli_error($mysqli));
    

    ?>
<div class="container">
    <div class="row justify-content-center">
                <?php while($row=$result->fetch_assoc()):?>
                    <div class="content">
                    <h2><?php echo $row['title_db']; ?></h2>
                    <h3>by <?php echo $row['name_db']; ?></h3>
                    <p class="content"><?php echo $row['des_db']; ?><br></p><br> </div>
                    <?php endwhile; ?>
                   
    </div>

</div>

<?php $mysqli->close();?>
</body>
</html>
    


