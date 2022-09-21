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

            <!-- Update from database -->
            <div class="col-md-8">
                <form action="database/actions.php" method="POST">
                    <?php
                    require 'database/connection.php';
                    $id = $_GET['id'];
                    //if id is null redirect to index.php
                    if ($id == null) {
                        header('Location: index.php?error=invalid_id');
                    }
                    $sql = "SELECT * FROM users WHERE id = $id";
                    $result = mysqli_query($db, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<div class='mb-3'>
                            <label for='name' class='form-label'>Name</label>
                            <input type='text' class='form-control' id='name' name='name' value='" . $row['name'] . "'>
                        </div>
                        <div class='mb-3'>
                            <label for='email' class='form-label'>Email</label>
                            <input type='email' class='form-control' id='email' name='email' value='" . $row['email'] . "'>
                        </div>
                        <div class='mb-3'>
                            <label for='contact' class='form-label'>Contact</label>
                            <input type='text' class='form-control' id='contact' name='contact' value='" . $row['contact'] . "'>
                        </div>
                        <input type='hidden' name='id' value='" . $row['id'] . "'>
                        <button type='submit' class='btn btn-primary' name='update'>Update</button>
                        <a href='index.php?update=cancel' class='btn btn-danger'>Cancel</a>";
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
</body>

</html>