<?php
// session_start();

// Destroy the session
session_destroy();

// OR Unset specific variable (example)
unset($_SESSION);

header("Location: ../../index.php");
exit();