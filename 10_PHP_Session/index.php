<?php
session_start();

if (isset($_GET["logout"])) {
    header("Location: logout.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"] ?? "");
    if ($name !== "") {
        session_regenerate_id(true);
        $_SESSION["participant_name"] = $name;
        $_SESSION["session_started"] = time();
        header("Location: welcome.php");
        exit;
    }
}
?>
<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>PHP Session Login</title><link rel="stylesheet" href="../assets/site.css"><link rel="stylesheet" href="style.css"></head><body><main class="wrap php-wrap"><section class="hero"><p class="kicker">Experiment 10 · PHP session</p><h1>Begin a <em>session.</em></h1><p class="lead">Enter your name to start. The session stores your name and start time.</p></section><form class="panel" method="post" action="index.php"><label class="field" for="name">Participant name</label><input id="name" name="name" maxlength="70" required><div class="actions"><button class="btn" type="submit">Start session</button></div></form></main></body></html>
