<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 1 | CRUD</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <script src="./js/bootstrap.js"></script>
    <script src="./js/jquery.js"></script>
    <script src="./js/popper.js"></script>
</head>

<body>
    <div class="d-grid gap-3 px-3">
        <div class="row align-items-start">
            <?php include_once 'components/header.php'; ?>

            <!-- Delete Confirmation -->
            <div class="col-md-8">
                <?php
                require 'database/connection.php';
                $id = $_GET['id'];
                //if id is null redirect to index.php
                if ($id == null) {
                    header('Location: index.php?error=invalid_id');
                }
                $sql = "SELECT * FROM `users` WHERE `id` = '$id'";
                $result = mysqli_query($db, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='alert alert-danger' role='alert'>
                        <h4 class='alert-heading'>Are you sure you want to delete this user?</h4>
                        <p>Name: " . $row['name'] . "</p>
                        <p>Email: " . $row['email'] . "</p>
                        <p>Contact: " . $row['contact'] . "</p>
                        <hr>
                        <p class='mb-0'>This action cannot be undone.</p>
                    </div>
                    <a href='database/actions.php?delete=" . $row['id'] . "' class='btn btn-danger'>Delete</a>
                    <a href='index.php?delete=cancel' class='btn btn-secondary'>Cancel</a>";
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>