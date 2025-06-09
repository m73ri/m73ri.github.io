<?php
// Zpracování formuláře a zobrazení jednoduchého potvrzení uživateli

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $jmeno = htmlspecialchars($_POST['jmeno'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $telefon = htmlspecialchars($_POST['telefon'] ?? '');
    $room = htmlspecialchars($_POST['room'] ?? '');
    $from = htmlspecialchars($_POST['from'] ?? '');
    $to = htmlspecialchars($_POST['to'] ?? '');
    $people = htmlspecialchars($_POST['people'] ?? '');
    $note = htmlspecialchars($_POST['note'] ?? '');

    echo "<!DOCTYPE html>
<html lang='cs'><head><meta charset='UTF-8'>
<title>Potvrzení rezervace</title>
<link rel='stylesheet' href='style.css'>
</head>
<body>
<section class='reservation-confirm'>
  <div class='reservation-card'>
    <h2>Děkujeme za vaši rezervaci!</h2>
    <div class='reservation-confirm-info'>
      Podrobnosti najdete ve vašem e-mailu.
    </div>
    <hr>
    <p><strong>Jméno:</strong> $jmeno</p>
    <p><strong>E-mail:</strong> $email</p>
    <p><strong>Telefon:</strong> $telefon</p>
    <p><strong>Pokoj:</strong> $room</p>
    <p><strong>Příjezd:</strong> $from</p>
    <p><strong>Odjezd:</strong> $to</p>
    <p><strong>Počet osob:</strong> $people</p>";
    if ($note) { 
      echo "<p><strong>Poznámka:</strong> ".nl2br($note)."</p>"; 
    }
    echo "<br>
    <a href='index.html' class='reservation-btn'>Zpět na hlavní stránku</a>
  </div>
</section>
</body></html>";
} else {
    header('Location: index.html');
    exit();
}
?>