<?php
date_default_timezone_set("Asia/Kolkata");
$currentDate = date("d-m-Y");
$currentTime = date("h:i:s A");
$currentDay = date("l");
?>
<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>PHP Date and Time</title><link rel="stylesheet" href="../assets/site.css"><link rel="stylesheet" href="style.css"></head><body><header class="site-head"><div class="head-inner"><a class="brand" href="../index.html">WP <span>/ 11 DATE & TIME</span></a><a class="back" href="../index.html">← Portfolio</a></div></header><main class="wrap"><section class="hero"><p class="kicker">Experiment 11 · PHP date function</p><h1>The current <em>moment.</em></h1><p class="lead">The PHP date() function displays the server date, time and day. Time zone is set to India Standard Time.</p></section><section class="panel date-list"><p><span>Date</span><strong><?= htmlspecialchars($currentDate, ENT_QUOTES, "UTF-8") ?></strong></p><p><span>Time</span><strong><?= htmlspecialchars($currentTime, ENT_QUOTES, "UTF-8") ?></strong></p><p><span>Day</span><strong><?= htmlspecialchars($currentDay, ENT_QUOTES, "UTF-8") ?></strong></p></section></main></body></html>
