<?php
//Connection
require 'connection.php';
//Create User
if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $sql = "INSERT INTO users (name, email, contact) VALUES ('$name', '$email', '$contact')";
    if (mysqli_query($db, $sql)) {
        header("Location: ../index.php?create=success");
    } else {
        header("Location: ../index.php?create=error");
    }
}
//Update User
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $sql = "UPDATE users SET name='$name', email='$email', contact='$contact' WHERE id='$id'";
    if (mysqli_query($db, $sql)) {
        header("Location: ../index.php?update=success");
    } else {
        header("Location: ../index.php?update=error");
    }
}

//Delete User
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM users WHERE id='$id'";
    if (mysqli_query($db, $sql)) {
        header("Location: ../index.php?delete=success");
    } else {
        header("Location: ../index.php?delete=error");
    }
}