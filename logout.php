<?php session_start() ?>

<?php 
    $_SESSION['user'] = null;
    $_SESSION['role'] = null;

    header('Location: index.php?message=LogoutSuccess');
    exit();
?>