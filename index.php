<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"Heads or Tails" - Choose Difficulty Level</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        if (!isset ($_POST["access"])) {
            $access = 0;
        } else {
            $access = $_POST["access"];
        }
        if (!isset ($_POST["level"])) {
            $level = "easy";
        } else {
            $level = $_POST["level"];
        }
        if (!isset ($_POST["currentWins"])) {
            $currentWins = 0;
        } else {
            $currentWins = $_POST["currentWins"];
        }
        if (!isset ($_POST["wins"])) {
            $wins = 0;
        } else {
            $wins = $_POST["wins"];
        }
        if (!isset ($_POST["loses"])) {
            $loses = 0;
        } else {
            $loses = $_POST["loses"];
        }
        echo ("<p>Choose difficulty level:</p>")
    ?>
    <form action="play.php" method="post">
        <label><input type="radio" name="level" value="easy" checked>Easy</label>
        <label><input type="radio" name="level" value="medium" <?php 
                if ($access < 1) {
                    echo ("disabled");
                }
            ?>>Medium</label>
        <label><input type="radio" name="level" value="hard" <?php
                if ($access < 2) {
                    echo ("disabled");
                }
            ?>>Hard</label>
        <input type="hidden" name="access" value="<?=$access?>">
        <input type="hidden" name="wins" value="<?=$wins?>">
        <input type="hidden" name="loses" value="<?=$loses?>">
        <input type="hidden" name="count" value="0">
        <input type="hidden" name="currentWins" value="0">
        <input type="submit" value="Choose">
    </form>
</body>
</html>