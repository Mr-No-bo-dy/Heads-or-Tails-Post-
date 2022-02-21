<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"Heads or Tails" - Play the Game</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        // var_dump($_POST);
        // echo ("<br>");
        $access = $_POST["access"];
        $level = $_POST["level"];
        $count = $_POST["count"];
        $currentWins = $_POST["currentWins"];
        $wins = $_POST["wins"];
        $loses = $_POST["loses"];
        echo ("<p>You are playing on ".$level." difficulty level.</p>");
    ?>
    <form action="<?php if ($count == "10") {echo ("results.php");} else {echo ("play.php");}?>" method="post">
        <?php
            if ($count == "10") {
                echo ('<input type="submit" name="results" value="Show results">');
            } else {
                echo ('<label><button type="submit" name="choice" value="0">Orel</button></label>
                    <label><button type="submit" name="choice" value="1">Reshka</button></label>');
            }
            echo("<p>You played ".$count." times.</p>");
        ?>
        <input type="hidden" name="level" value="<?php echo($level); ?>">
        <input type="hidden" name="count" value="<?php echo(++$count); ?>">
        <?php
            if (isset ($_POST["choice"])) {
                $choice = $_POST["choice"];
                $coin = rand(0,1);
                switch ($choice) {
                    case $coin:
                        switch ($level) {
                            case "hard":
                            $coin = rand(0,1);
                                switch ($choice) {
                                    case $coin:
                                        $currentWins = $currentWins + 1;
                                        $wins = $wins + 1;
                                        echo ("Hard win!");
                                        break;
                                    default:
                                        $loses = $loses + 1;
                                        echo ("Sorry, but... ");
                                }
                                break;
                            default:
                                $currentWins = $currentWins + 1;
                                $wins = $wins + 1;
                                echo ("You win");
                        }
                        break;
                    default:
                        switch ($level) {
                            case "easy":
                            $coin = rand(0,1);
                                switch ($choice) {
                                    case $coin:
                                        $currentWins = $currentWins + 1;
                                        $wins = $wins + 1;
                                        echo ("Easy win");
                                        break;
                                    default:
                                        $loses = $loses +1;
                                        echo ("Loser!");
                                }
                                break;
                            default:
                                $loses = $loses + 1;
                                echo ("You lose");
                        }
                }
                echo ("<p>You win ".$currentWins." times this time.</p>");
            }
        ?>
        <input type="hidden" name="access" value="<?=$access?>">
        <input type="hidden" name="wins" value="<?=$wins?>">
        <input type="hidden" name="loses" value="<?=$loses?>">
        <input type="hidden" name="currentWins" value="<?=$currentWins?>">
    </form>
</body>
</html>