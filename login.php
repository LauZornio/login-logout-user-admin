<?php include "inc/db.php"; ?>
<?php session_start() ?>

<?php
    $userMail = $_POST['mail'];
    $psw = $_POST['psw'];

    // Prepara la query per evitare SQL injection
    $stmt = $connessioneDB->prepare("SELECT * FROM user WHERE mailUser = ?");
    if ($stmt === false) {
        // Gestione dell'errore di preparazione
        echo "Errore nella preparazione della query: " . mysqli_error($connessioneDB);
        return;
    }

    $stmt->bind_param("s", $userMail);

    // Esegui la query
    $stmt->execute();

    // Ottieni il risultato
    $result = $stmt->get_result();
    
    // Controlla se l'utente esiste
    if ($result->num_rows === 0) {
        header('Location: index.php?error=NoUserFound');
        exit();
    } else {
        // Recupera i dati dell'utente, row è array con tutte le info che recupero con SESSION
        $row = $result->fetch_assoc();
        
        // Verifica la password
        if ($psw === $row['password']) {
            $_SESSION['user'] = $row['mailUser'];
            $_SESSION['role'] = $row['role'];

            header('Location: area-riservata.php');
        } else {
            header('Location: index.php?error=WrongPassword');
        }
    }

    // Chiusura dello statement
    $stmt->close();
?>