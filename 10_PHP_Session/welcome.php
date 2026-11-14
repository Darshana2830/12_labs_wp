<?php
session_start();
if (!isset($_SESSION["participant_name"], $_SESSION["session_started"])) {
    header("Location: index.php");
    exit;
}
$name = $_SESSION["participant_name"];
$startTime = date("h:i:s A", $_SESSION["session_started"]);
?>
<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Welcome</title><link rel="stylesheet" href="../assets/site.css"><link rel="stylesheet" href="style.css"></head><body><main class="wrap php-wrap"><div class="time">Start time: <?= htmlspecialchars($startTime, ENT_QUOTES, "UTF-8") ?></div><section class="hero"><p class="kicker">Session active</p><h1>Hello, <em><?= htmlspecialchars($name, ENT_QUOTES, "UTF-8") ?>.</em></h1><p class="lead">Your session is active. Select logout when you have finished.</p></section><a class="btn" href="logout.php">Logout</a></main></body></html>
