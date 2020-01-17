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
    <title>Onkunde Result</title>
</head>
<body>
    <?php require "base.php" ?>
    <main>
    <p>Er zijn veel mensen die niet kunnen <?php echo $_SESSION["skillS"]; ?>. Neem nou <?php echo $_SESSION["friendlyS"];?>. Zelfs met hulp van een <?php echo $_SESSION["vacationS"]; ?> of zelfs <?php echo $_SESSION["numberS"]; ?> kan <?php echo $_SESSION["friendlyS"];?> niet <?php echo $_SESSION["skillS"]; ?>. Dat heeft niet te maken met een gebrek aan <?php echo $_SESSION["goodTraitS"]; ?>, maar met een te veel aan <?php echo $_SESSION["badTraitS"]; ?>. Te veel <?php echo $_SESSION["badTraitS"]; ?> leidt tot <?php echo $_SESSION["worstS"];?> en dat is niet goed als je wilt <?php echo $_SESSION["skillS"]; ?>. Helaas voor <?php echo $_SESSION["friendlyS"];?>.</p>
    </main>
    <?php require "footer.html" ?>
</body>
</html>