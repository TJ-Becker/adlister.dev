<?php
session_start();
require_once __DIR__ . '/../bootstrap.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>HearthLister</title>
    <?php require '../views/partials/head.php'; ?>
</head>
<body>
    <?php if ($main_view !== '../views/users/login.php') {
        require '../views/partials/navbar.php';
    } ?>

    <?php require $main_view; ?>

    <?php require '../views/partials/common_js.php'; ?>
</body>
</html>