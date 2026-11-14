<?php
session_start();
if (!isset($_SESSION["participant_name"], $_SESSION["session_started"])) {
    header("Location: index.php");
    exit;
}
$name = $_SESSION["participant_name"];
$duration = max(0, time() - (int)$_SESSION["session_started"]);
$hours = intdiv($duration, 3600);
$minutes = intdiv($duration % 3600, 60);
$seconds = $duration % 60;
session_unset();
session_destroy();
?>
<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Session Logout</title><link rel="stylesheet" href="../assets/site.css"><link rel="stylesheet" href="style.css"></head><body><main class="wrap php-wrap"><section class="hero"><p class="kicker">Session completed</p><h1>Thank you, <em><?= htmlspecialchars($name, ENT_QUOTES, "UTF-8") ?>.</em></h1><p class="lead">Your session duration was:</p><div class="duration"><?= sprintf("%02d:%02d:%02d", $hours, $minutes, $seconds) ?></div><a class="btn alt" href="index.php">Start another session</a></section></main></body></html>
