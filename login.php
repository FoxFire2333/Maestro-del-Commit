<?php
session_start();
// TODO: Implementare la connessione al DB usando il nuovo sistema di variabili d'ambiente
echo "<h1>Accesso Portale Aziendale</h1>";
echo "<form method='POST' action='main_menu.php'>";
echo "<input type='text' name='username' placeholder='Username' required><br><br>";
echo "<input type='password' name='password' placeholder='Password' required><br><br>";
echo "<button type='submit'>Login</button>";
echo "</form>";
echo "<p>Non hai un account? Vai a <a href='register.php'>Registrati</a></p>";
?>
