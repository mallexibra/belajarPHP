<?php
// Menghancurkan session yang ada pada komputer
    session_start();
    session_unset();
    $_SESSION = [];
    session_destroy();
?>