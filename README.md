# 📋 Login/Logout User
Ringrazio il corso "Impara PHP e MySQL da zero e sviluppa un ecommerce completo" della professoressa Simona Tocci -Web Designer and Developer- presso il sito Udemy.

## 🚀 Descrizione
Questo progetto include funzionalità come il login utente, il logout, accedere ad un'area riservata in Sessione solo se si è Amministratore.
 - La pagina index.php contiene il login in Modal Form con l'utilizzo di JavaScript.
 - Login.php verifica che l'utente sia presente all'interno del DB, controllando la mail e verificando che la psw sia corretta.
 - Se l'utente che richiede l'accesso:
   - Verificato: ulteriore controllo, se è Amministratore allora accere all'area riservata in Session
   - Verificato: non è amministratore e quindi non entra in Session
   - Non Verificato: viene comunicato se l'utente è registrato o meno o se è stata sbagliata la psw.   

Costruito con PHP, JavaScript e CSS, mira a fornire un'esperienza utente senza interruzioni.

## 🛠️ Funzionalità
- 🔒 Autenticazione e gestione delle sessioni utente
- 🎨 Finestre modali per il login
- 📋 Messaggi personalizzati e automatici in base alle casistiche

## 📜 Licenza
Questo progetto è sotto licenza MIT. Vedi il file LICENSE per i dettagli.

## 🤝 Contributi
Fai un fork del repository
Crea un nuovo branch (git checkout -b feature-branch)
Apporta le tue modifiche
Effettua il commit delle tue modifiche (git commit -m 'Aggiungi qualche funzionalità')
Push al branch (git push origin feature-branch)
Apri una Pull Request

## 📂 Struttura dei File
```plaintext
.
├── index.php
├── login.php
├── logout.php
├── area-riservata.php
├── db.php
├── style.css
└── custom.js


