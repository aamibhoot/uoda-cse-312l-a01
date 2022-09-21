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

            <!-- Read from database -->
            <div class="col-md-8">
                <?php
                if ($_GET['delete'] == 'success') {
                    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                     <strong>Success!</strong> Record deleted successfully.
                     <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
                } else if ($_GET['create'] == 'success') {
                    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Success!</strong> Record created successfully.
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                           </div>";
                } else if ($_GET['update'] == 'success') {
                    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Success!</strong> Record updated successfully.
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                           </div>";
                } else if ($_GET['delete'] == 'error') {
                    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Error!</strong> Record not deleted.
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                           </div>";
                } else if ($_GET['create'] == 'error') {
                    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Error!</strong> Record not created.
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                           </div>";
                } else if ($_GET['update'] == 'error') {
                    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Error!</strong> Record not updated.
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                           </div>";
                } else if ($_GET['delete'] == 'cancel') {
                    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Error!</strong> Record not deleted.
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                           </div>";
                } else if ($_GET['update'] == 'cancel') {
                    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Error!</strong> Record not updated.
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                           </div>";
                } else if ($_GET['create'] == 'cancel') {
                    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                        <strong>Error!</strong> Record not created.
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                           </div>";
                } else if ($_GET['error'] == 'invalid_id') {
                    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                        <strong>Error!</strong> Invalid ID.
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                           </div>";
                }
                ?>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //Connection
                        require 'database/connection.php';
                        //Read
                        $sql = "SELECT * FROM users";
                        $result = mysqli_query($db, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>
                                <th scope='row'>" . $row['id'] . "</th>
                                <td>" . $row['name'] . "</td>
                                <td>" . $row['email'] . "</td>
                                <td>" . $row['contact'] . "</td>
                                <td>
                                    <a href='update.php?id=" . $row['id'] . "' class='btn btn-warning'>Update</a>
                                    <a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger'>Delete</a>
                                </td>
                            </tr>";
                            }
                        } else {
                            echo "0 results";
                        }
                        ?>
                    </tbody>
            </div>
        </div>
    </div>
</body>

</html>