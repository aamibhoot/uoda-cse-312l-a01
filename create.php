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

            <!-- Create from database -->
            <div class="col-md-8">
                <form action="database/actions.php" method="POST" autocomplete="off">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label for="contact" class="form-label">Contact</label>
                        <input type="text" class="form-control" id="contact" name="contact"
                            placeholder="Enter your contact">
                    </div>
                    <button type="submit" class="btn btn-primary" name="create">Submit</button>
                    <a href="index.php?create=cancel" class="btn btn-danger">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>