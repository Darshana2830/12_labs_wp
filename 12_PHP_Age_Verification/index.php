<?php
$message = "";
$messageType = "";
$nameValue = "";
$ageValue = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nameValue = trim($_POST["name"] ?? "");
    $ageValue = $_POST["age"] ?? "";
    $age = filter_var($ageValue, FILTER_VALIDATE_INT);

    if ($nameValue === "" || $age === false || $age < 0 || $age > 120) {
        $message = "Please enter a valid name and an age between 0 and 120.";
        $messageType = "error";
    } elseif ($age < 18) {
        $message = "Hello, " . $nameValue . ", you are not authorized to visit the site.";
        $messageType = "error";
    } else {
        $message = "Welcome to this site, " . $nameValue . "!";
        $messageType = "success";
    }
}
?>
<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>PHP Age Verification</title><link rel="stylesheet" href="../assets/site.css"><link rel="stylesheet" href="style.css"></head><body><header class="site-head"><div class="head-inner"><a class="brand" href="../index.html">WP <span>/ 12 AGE CHECK</span></a><a class="back" href="../index.html">← Portfolio</a></div></header><main class="wrap"><section class="hero"><p class="kicker">Experiment 12 · PHP conditional statements</p><h1>Check your <em>access.</em></h1><p class="lead">Enter your name and age. The PHP program checks whether the visitor is at least 18 years old.</p></section><form class="panel" method="post" action="index.php"><label class="field" for="name">Name</label><input id="name" name="name" maxlength="70" required value="<?= htmlspecialchars($nameValue, ENT_QUOTES, "UTF-8") ?>"><label class="field" for="age">Age</label><input id="age" name="age" type="number" min="0" max="120" required value="<?= htmlspecialchars((string)$ageValue, ENT_QUOTES, "UTF-8") ?>"><div class="actions"><button class="btn" type="submit">Check eligibility</button></div><?php if ($message !== ""): ?><p class="message <?= $messageType ?>" role="status"><?= htmlspecialchars($message, ENT_QUOTES, "UTF-8") ?></p><?php endif; ?></form></main></body></html>
