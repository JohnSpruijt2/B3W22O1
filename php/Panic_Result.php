<?php 
session_start();
$panicHref = "../index.php";
$onkundeHref = "onkunde.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
    <title>Panic Result</title>
</head>
<body>
    <?php require "base.php"; ?>
    <main>
    <p>Er heerst paniek in het koninkrijk <?php echo $_SESSION["countryS"] ?>. Koning <?php echo $_SESSION["teacherS"] ?> is ten einde raad en als Koning <?php echo $_SESSION["teacherS"] ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $_SESSION["personS"] ?>.<br><br>"<?php echo $_SESSION["countryS"] ?>! Het is een ramp! Het is een schande!"<br><br>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"<br><br>"Mijn <?php echo $_SESSION["animalS"] ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $_SESSION["toyS"] ?> voor hem gekocht!"<br><br>"Majesteit, uw <?php echo $_SESSION["animalS"] ?> komt vast vanzelf weer terug?"<br><br>"Ja, da's leuk en aardig,maar hoe moet ik in de tussentijd <?php echo $_SESSION["hobbyS"] ?> leren?"<br><br>"Maar Sire, daar kunt u toch uw <?php echo $_SESSION["moneyS"] ?> voor gebruiken."<br><br>"<?php echo $_SESSION["personS"] ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."<br><br>"<?php echo $_SESSION["boredS"] ?>, Sire."</p>
    </main>
    <?php require "footer.html"; ?>
</body>
</html>