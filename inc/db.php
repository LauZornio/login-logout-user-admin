<?php

$server = "localhost";
$utente = "root";
$psw = "root";
$database = "login-autorizzazione";

// Connecting to the database using mysqli
$connessioneDB = mysqli_connect($server, $utente, $psw, $database);

//Error handling
if (mysqli_connect_errno()) {
    // Log the error to a log file (general_error.log)
    error_log("Errore di connessione al database: " . mysqli_connect_error(), 3, "/path/to/errore_generale.log");
    // Generic message for users
    echo "C'è stato un problema nel connettersi al database. Riprova più tardi.";
    exit;  // Stop execution on error
}

?>