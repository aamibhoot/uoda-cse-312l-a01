<?php
function active($currect_page)
{
    $url_array =  explode('/', $_SERVER['REQUEST_URI']);
    $url = end($url_array);
    if ($currect_page == $url) {
        echo 'btn btn-secondary'; //class name in css 
    } else {
        echo 'btn btn-outline-secondary'; //class name in css
    }
}
?>
<div class="col-md-12 text-center">
    <h1 class="display-4">Lab Assignment 1 — Basic CRUD</h1>
    <h3 class="display-6">w/ Bootstrap 5</h3>
    <div class="d-flex justify-content-between w-100 px-2 py-1 bg-dark rounded-pill text-white fs-6 mb-3">
        <small class="">CSE 312L —— E-commerce Lab</small>
        <small class="badge rounded-pill text-bg-light">19<sup>th</sup> Sept. 2022</small>
        <small class="">APON — 011191002</small>

    </div>

</div>
<div class="col-md-4">
    <div class="d-grid gap-2">
        <h3 class="display-6">Navigation</h3>
        <a href="index.php" class="<?php active('index.php'); ?>">Home</a>
        <a href="create.php" class="<?php active('create.php'); ?>">Create</a>
    </div>
    <hr class="my-4">
</div>