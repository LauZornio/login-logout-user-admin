<!-- login.php e logout.php sono pagine sono php, di servizio -->
<!-- lin index.php ci sono i controlli per la gestione dei messaggi dalle altre pagine -->


<?php include "inc/db.php"; ?>

<!DOCTYPE html>
<html lang="it-IT">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="img/favicon.png">
</head>
<body>
  <div class="content login">
    <h1>Esempio di Login</h1>
    <button id="loginBtn" class="button">Login</button> <!-- ID serve per JavaSCript e la CLASSE per la formattazione -->
  </div>

  <div class="content center spacer">
    <?php
      if (isset($_GET['error'])) {
          $error_message = '';
          switch ($_GET['error']) {
              case 'NoUserFound':
                  $error_message = 'Nessun utente trovato con l\'email specificata.';
                  break;
              case 'WrongPassword':
                  $error_message = 'Password errata. Accesso non consentito.';
                  break;
              case 'NoAccess':
                  $error_message = 'Utente e Password esistenti. Accesso non consentito. Solo gli amministratori possono accedere.';
                  break;
              default:
                  $error_message = 'Si è verificato un errore. Riprova.';
                  break;
          }
          echo '<p style="color: red;">' . $error_message . '</p>';
      }

      if (isset($_GET['message'])) {
          $message = '';
          switch ($_GET['message']) {
              case 'LogoutSuccess':
                  $message = 'Logout avvenuto con successo.';
                  break;
              default:
                  $message = '';
                  break;
          }
          echo '<p style="color: red;">' . $message . '</p>';
      }
    ?>
  </div>

  <!-- The Modal -->
  <div id="loginModal" class="modal">
    <!-- questo div MODAL è la schermata nera trasparente che rende inerte tutto tranne il form -->

    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span> <!-- è la x per chiudere la finestra modal -->
      <form action="login.php" method="post" class="login-form">
        <label for="mail"><b>E-Mail</b></label>
        <input type="email" placeholder="Enter e-mail" name="mail" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit" name="login">Login</button>
      </form>
    </div>

  </div>

  <script src="js/custom.js"></script>
</body>
</html>