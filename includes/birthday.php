<?php
$now      = new DateTime();
$birthday = new DateTime("2001-04-22 00:00:00");
$age      = $now->diff($birthday)->format("%y");
?>