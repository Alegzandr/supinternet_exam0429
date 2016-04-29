<?php
session_start();
session_destroy();
header('Location: /exo1.php');
exit;