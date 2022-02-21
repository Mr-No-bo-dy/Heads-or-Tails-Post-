<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"Heads or Tails" - Results</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        // var_dump($_POST);
        // echo ("<br>");
        $access = $_POST["access"];
        $level = $_POST["level"];
        $currentWins = $_POST["currentWins"];
        $wins = $_POST["wins"];
        $loses = $_POST["loses"];
        if ($access == 0 && $level == "easy" && $currentWins >= 6) {
            $access += 1;
            echo ("<p>Congratulations! You can now play on Medium difficulty.</p>");
        } else if ($access == 1 && $level == "medium" && $currentWins >= 6) {
            $access += 1;
            echo ("<p>Congratulations! You can now play on Hard difficulty.</p>");
        }
        echo ("<p>You won ".$currentWins." times on current game.</p>");
        echo ("<p>You won ".$wins." times.</p>");
        echo ("<p>You lost ".$loses." times.</p>");
    ?>
    <form action="index.php" method="post">
        <input type="hidden" name="access" value="<?=$access?>">
        <input type="hidden" name="wins" value="<?=$wins?>">
        <input type="hidden" name="loses" value="<?=$loses?>">
        <input type="hidden" name="level" value="<?=$level?>">
        <input type="hidden" name="currentWins" value="<?=$currentWins?>">
        <input type="submit" value="Return to Play">
    </form>
</body>
</html>