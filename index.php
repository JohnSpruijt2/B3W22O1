<?php
 session_start();
$panicHref = "";
$onkundeHref = "php/onkunde.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valid = true;
    if(empty($_POST['animal']) || empty($_POST['person']) || empty($_POST['country']) || empty($_POST['bored']) || empty($_POST['toy']) || empty($_POST['teacher']) || empty($_POST['money']) || empty($_POST['hobby'])){
        $valid=false;
        $error = "<font color='red'>Every field needs to be filled in</font>";
    }

    $animal = test_input($_POST["animal"]);
    $person = test_input($_POST["person"]);
    $country = test_input($_POST["country"]);
    $bored = test_input($_POST["bored"]);
    $toy = test_input($_POST["toy"]);
    $teacher = test_input($_POST["teacher"]);
    $money = test_input($_POST["money"]);
    $hobby = test_input($_POST["hobby"]);

    $_SESSION["animalS"] = $animal;
    $_SESSION["personS"] = $person;
    $_SESSION["countryS"] = $country;
    $_SESSION["boredS"] = $bored;
    $_SESSION["toyS"] = $toy;
    $_SESSION["teacherS"] = $teacher;
    $_SESSION["moneyS"] = $money;
    $_SESSION["hobbyS"] = $hobby;

    if ($valid == true) {
        header('location:php/Panic_Result.php');
        exit();
    }
  }

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/style.css">
    <title>B3W22O1 - Paniek</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
</head>
<body>
    <?php require 'php/base.php'; ?>
    <main>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <h1>Er heerst paniek...</h1>
    <label for="animal">Welk dier zou je nooit als huisdier willen hebben?</label> <input type="text" name="animal" id="animal" minlength="1"  value="<?php echo $_SESSION['animalS'] ?>">
    <br>
    <label for="person">Wie is de belangrijkste persoon in je leven?</label> <input type="text" name="person" id="person" value="<?php echo $_SESSION['personS'] ?>">
    <br>
    <label for="country">In welk land zou je graag willen wonen?</label> <input type="text" name="country" id="country" value="<?php echo $_SESSION['countryS'] ?>">
    <br>
    <label for="bored">Wat doe je als je je verveelt?</label> <input type="text" name="bored" id="bored" value="<?php echo $_SESSION['boredS'] ?>">
    <br>
    <label for="toy">Met welk speelgoed speelde je als kind het meest?  </label> <input type="text" name="toy" id="toy" value="<?php echo $_SESSION['toyS'] ?>">
    <br>
    <label for="teacher">Bij welke docent spijbel je het liefst?</label> <input type="text" name="teacher" id="teacher" value="<?php echo $_SESSION['teacherS'] ?>">
    <br>
    <label for="money">Als je €100.000,- had, wat zou je dan kopen?</label> <input type="text" name="money" id="money" value="<?php echo $_SESSION['moneyS'] ?>">
    <br>
    <label for="hobby">Wat is je favoriete bezigheid?</label> <input type="text" name="hobby" id="hobby" value="<?php echo $_SESSION['hobbyS'] ?>">
    <br>
    <?php echo "<a id='error'>".$error."</a><br>"; ?>
    <input id="submit" type="submit" value="submit">
        </form>
    </main>
    <?php require 'php/footer.html'; ?>
</body>
</html>