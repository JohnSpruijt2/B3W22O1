<?php 
session_start();
$panicHref = "../index.php";
$onkundeHref = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valid = true;
    if(empty($_POST['skill']) || empty($_POST['friendly']) || empty($_POST['number']) || empty($_POST['vacation']) || empty($_POST['goodTrait']) || empty($_POST['badTrait']) || empty($_POST['worst'])){
        $valid=false;
        $error = "<font color='red'>Every field needs to be filled in</font>";
    }

    $skill = test_input($_POST["skill"]);
    $friendly = test_input($_POST["friendly"]);
    $number = test_input($_POST["number"]);
    $vacation = test_input($_POST["vacation"]);
    $goodTrait = test_input($_POST["goodTrait"]);
    $badTrait = test_input($_POST["badTrait"]);
    $worst = test_input($_POST["worst"]);

    $_SESSION["skillS"] = $skill;
    $_SESSION["friendlyS"] = $friendly;
    $_SESSION["numberS"] = $number;
    $_SESSION["vacationS"] = $vacation;
    $_SESSION["goodTraitS"] = $goodTrait;
    $_SESSION["badTraitS"] = $badTrait;
    $_SESSION["worstS"] = $worst;
    
    if ($valid == true) {
        header('location:onkunde_result.php');
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
    <link rel="stylesheet" href="../styles/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
    <title>B3W22O1 - onkunde</title>
</head>
<body>
    <?php require "base.php" ?>
    <main>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <h1>Onkunde</h1>
    <label for="skill">Wat zou je graag willen kunnen?</label> <input type="text" name="skill" id="skill" minlength="1"  value="<?php echo $_SESSION['skillS'] ?>">
    <br>
    <label for="friendly">Met welk persoon kun je goed opschieten?</label> <input type="text" name="friendly" id="friendly" minlength="1"  value="<?php echo $_SESSION['friendlyS'] ?>">
    <br>
    <label for="number">Wat is je favoriete getal?</label> <input type="text" name="number" id="number" minlength="1"  value="<?php echo $_SESSION['numberS'] ?>">
    <br>
    <label for="vacation">Wat heb je altijd bij je als je op vakantie gaat?</label> <input type="text" name="vacation" id="vacation" minlength="1"  value="<?php echo $_SESSION['vacationS'] ?>">
    <br>
    <label for="goodTrait">Wat is je beste persoonlijke eigenschap?</label> <input type="text" name="goodTrait" id="goodTrait" minlength="1"  value="<?php echo $_SESSION['goodTraitS'] ?>">
    <br>
    <label for="badTrait">Wat is je slechste persoonlijke eigenschap?</label> <input type="text" name="badTrait" id="badTrait" minlength="1"  value="<?php echo $_SESSION['badTraitS'] ?>">
    <br>
    <label for="worst">Wat is het ergste wat je kan overkomen?</label> <input type="text" name="worst" id="worst" minlength="1"  value="<?php echo $_SESSION['worstS'] ?>">
    <br>
    <?php echo "<a id='error'>".$error."</a><br>"; ?>
    <input id="submit" type="submit" value="submit">
        </form>
    </main>
    <?php require "footer.html" ?>
</body>
</html>