<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  


  <?php require_once APP_DIR . "Views/header-contents.php"; ?>

</head>

<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL . "home"; ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL; ?>store">Store</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL . "cart"; ?>">Cart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL . "login"; ?>">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL . "registration"; ?>">Registration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL . "logout"; ?>">Logout</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
  </div>
</nav>