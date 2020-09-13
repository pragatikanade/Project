<?php include 'mainpage.php'; ?>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript">
        window.history.forward();

        function noBack() {
            window.history.forward();
        }
    </script>
</head>

<body>
    <?php require_once 'adminprocess.php'; ?>

    <?php
    //checking whether session is set or not for displaying messages.
    if (isset($_SESSION['message'])) : ?>
        <div class="alert alert-<?= $_SESSION['msg_type'] ?>">
            <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            ?>
        </div>
    <?php endif ?>
    <div class="container">
        <?php
        include 'connection.php';
        $result = $mysqli->query("SELECT * FROM article") or die(mysqli_error($mysqli));
        ?>
        <div class="row justify-content-center">
            <table class="table table-striped">
                <thead>
                    <tr class="table-danger">
                        <th class="bg-success">Title</th>
                        <th class="bg-success">Name</th>
                        <th class="bg-success">Description</th>
                        <th class="bg-success" colspan="2">Action</th>
                    </tr>
                </thead>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <tr>
                        <td><?php echo $row['title_db']; ?></td>
                        <td><?php echo $row['name_db']; ?></td>
                        <td><?php echo $row['des_db']; ?></td>
                        <td><a href="admin.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a></td>
                        <td><a href="adminprocess.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>
        <div class="container">
            <h2>Create Article</h2>
            <form action="adminprocess.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-group row">
                    <label>Title</label>
                    <div>
                        <input type="text" class="form-control" name="atitle" value="<?php echo $title; ?>" placeholder="Enter Artile title." required>
                    </div>
                </div>
                <div class="form-group row">
                    <label>Author name</label>
                    <div>
                        <input type="text" class="form-control" name="aname" value="<?php echo $name; ?>" placeholder="Enter Author name." required>
                    </div>
                </div>
                <div class="form-group row">
                    <label>Description</label>
                    <div>
                        <input type="text" class="form-control" name="adescription" value="<?php echo $desc; ?>" placeholder="Give description related to article." required>
                    </div>
                </div>
                <div class="form-group row">
                    <button type="submit" class="btn btn-primary" name="update">Update</button>
                </div>
            </form>
        </div>
    </div>
    </div>
</body>

</html>