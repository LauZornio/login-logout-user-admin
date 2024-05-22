<?php include "inc/db.php"; ?>
<?php session_start() ?>

<?php
  if (!isset($_SESSION['user']) || $_SESSION['role'] !== 'Amministratore') {
      header('Location: index.php?error=NoAccess');
      exit();
  }

  // Contenuto dell'area riservata
?>

<!DOCTYPE html>
<html lang="it-IT">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Area Riservata</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="img/favicon.png">
</head>
<body>
  <div class="content login">
    <h1>Area Riservata</h1>
    <a href="logout.php" class="button-out">Logout</a> <!-- ID serve per JavaSCript e la CLASSE per la formattazione -->
  </div>

  <div class="content center spacer">
    <p>Il tuo user di ingresso è <b><?php echo $_SESSION['user']; ?></b> il tuo ruolo è di <b><?php echo $_SESSION['role']; ?></b></p>
  
  </div>

  <script src="js/custom.js"></script>
</body>
</html>